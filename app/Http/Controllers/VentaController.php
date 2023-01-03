<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\venta;
use App\Models\inventario;
use App\Models\ventacliente;
use App\Models\devoluciones;
use PDF;
use App\Models\User;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enum = 1;
        $listaventa = $this->listaventas();        
        return view('punto_de_venta.index', compact('listaventa','enum'));
    }

    public function generarVentas(){        
        return view('punto_de_venta.ventas.generar');
    }

    public function reservarCliente_post(Request $request){          
        $datos=( 
            [               
                'nombre_cliente'=>$request->nombre_cliente,
                'nit'=>$request->nit,
                'fecha_reserva'=>$request->fecha_reserva,
                'estado_cliente'=>$request->estado_cliente,
                'cantidad_articulos'=>$request->cantidad_articulos,
            ]);
        ventacliente::create($datos);        
        return redirect()->route('reservar_cliente');        
    }

    public function reservarCliente(){
        $request = $this->ultimoCliente();
        $listaInventario = inventario::select('codigoProducto')->get();
        return view('punto_de_venta.ventas.reservar', compact('request','listaInventario'));
    }

    public function reservarVentas(Request $request){    
        $ventacliente = $this->ultimoCliente();
        /* dd(count($request->cod_producto)); */
        if ($ventacliente->estado_cliente == "reservado") {            
            for ($i=0; $i <count($request->cod_producto); $i++) {                
                $datos=( 
                    [               
                        'cod_producto'=>$request->cod_producto[$i],
                        'cantidad_articulo'=>$request->cantidad_articulo[$i],
                        'cantidad_kilo'=>$request->cantidad_kilo[$i],
                        'fecha_venta'=>$request->fecha_venta[$i],
                        'estado_venta'=>$request->estado_venta[$i],                        
                    ]);
                venta::create($datos);
            }                                  
        }
        return redirect()->route('confirmar_venta');
    }

    public function confirmarVenta(){
        $enum = 1;
        $cliente = $this->ultimoCliente();
        $venta = $this->ultimasventas();        
        return view('punto_de_venta.ventas.confirmar', compact('cliente', 'venta', 'enum'));
    }

    public function confirmarVenta_put(Request $request){        
        $getcliente = $this->ultimoCliente();
        $getventa = $this->ultimasventas();        
        $inventarioConVenta = $this->inventarioventa();                
        if($request->estado_venta == "confirmado" && $request->estado_cliente == "confirmado"){
            if($getcliente->estado_cliente == "reservado"){

                for ($i=0; $i <count($getventa); $i++) { 
                    $inventarioConVenta[$i]->cantidadSalida = $getventa[$i]->cantidad_articulo;
                    $inventarioConVenta[$i]->cantidadActual = $inventarioConVenta[$i]->cantidadActual - $getventa[$i]->cantidad_articulo;
                    $inventarioConVenta[$i]->update();

                    $getventa[$i]->idcliente_idventa = $getcliente->id_ventacliente;
                    $getventa[$i]->estado_venta = "confirmado";
                    $getventa[$i]->update();
                }                     

                $getcliente->estado_cliente = "confirmado";
                $getcliente->update();                                                
                return redirect()->route('ventas_index');
            }else{                                                          
                return "error en la venta";
            }
        }
    }

    public function generarFactura($codClienteVenta){        
        $users = venta::select()
            ->where('estado_venta', '=', 'confirmado')
            ->where('idcliente_idventa', $codClienteVenta)
            ->join('ventaclientes', 'ventaclientes.id_ventacliente', '=', 'idcliente_idventa')
            ->join('inventarios', 'inventarios.codigoProducto', '=', 'cod_producto')            
            ->get();

            //dd($users);
  
        $data = [
            'title' => 'Factura Veterinaria EL CRISTO',
            'cod_venta' => $users[1]->id_ventacliente,
            'CI_cliente' => $users[1]->nit,
            'Nombre_Cliente' => $users[1]->nombre_cliente,
            'date' => $users[1]->fecha_venta,
            'users' => $users
        ]; 
            
        //dd($data);
        $pdf = PDF::loadView('punto_de_venta.ventas.factura', $data);
             
        return $pdf->stream();
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(venta $venta)
    {

    }

    public function devolucionShow($id_venta){        
        $getventaconfirmada = venta::where('id_venta', '=', $id_venta)
        ->join('ventaclientes', 'ventaclientes.id_ventacliente', '=', 'idcliente_idventa')
        ->join('inventarios', 'inventarios.codigoProducto', '=', 'cod_producto')
        ->get()->first();
        return view('punto_de_venta.devoluciones.mostrardevolucion', compact('getventaconfirmada'));
    }

    public function devolucion_post(Request $request){        
            /**crea la devolucion */
            $creardevolucion=(
                [  
                    'iddevoluciones_idventa'=>$request->id_venta,
                    'iddevoluciones_idcliente'=>$request->id_ventacliente,
                    'cantidad_articulo'=>$request->cantidad_articulo,
                    'cod_producto'=>$request->cod_producto,
                    'fecha_devolucion'=>$request->fecha_devolucion,
                ]);
            devoluciones::create($creardevolucion);

            /**actualiza el inventario */
            $actualizarinventario = inventario::where('codigoProducto', '=', $request->cod_producto)->get()->first();
            $actualizarinventario->cantidadActual = $actualizarinventario->cantidadActual + $request->cantidad_articulo;
            $actualizarinventario->update();

            /**actualiza la venta */
            $actualizarEstadoVenta = venta::find($request->id_venta);
            $actualizarEstadoVenta->estado_venta = "devolucion";
            $actualizarEstadoVenta->update();

            return redirect()->route('ventas_index');        
    }

    /*******************************************************************/
    /****************** FUNCIONES RECURRENTES **************************/
    /*******************************************************************/
    function ultimoCliente(){
        return ventacliente::get()->last();
    }

    function ultimasventas(){
        return venta::select()->where('estado_venta', '=', 'reservado')->join('inventarios', 'inventarios.codigoProducto', '=', 'cod_producto')->get();
    }    

    function inventarioventa(){
        return inventario::select()->join('ventas', 'ventas.cod_producto', 'codigoProducto')->get();
    }

    function listaventas(){
        return venta::select()
        ->where('estado_venta', '=', 'confirmado')
        ->join('ventaclientes', 'ventaclientes.id_ventacliente', '=', 'idcliente_idventa')
        ->join('inventarios', 'inventarios.codigoProducto', '=', 'cod_producto')->orderBy('id_venta', 'desc')->get();
    }    
}