<?php

namespace App\Http\Controllers;

use App\Models\venta;
use App\Models\inventario;
use App\Models\ventacliente;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaventa = $this->listaventas();        
        return view('ventas.index', compact('listaventa'));
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

    public function generarVentas(){        
        return view('ventas.generar');
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
        return view('ventas.reservar', compact('request','listaInventario'));
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
        return view('ventas.confirmar', compact('cliente', 'venta', 'enum'));
    }

    public function confirmarVenta_put(Request $request){
        $getcliente = $this->ultimoCliente();
        $getventa = $this->ultimasventas();

        if($request->estado_venta == "confirmado" && $request->estado_cliente == "confirmado"){
            if($getcliente->estado_cliente == "reservado"){
                $getcliente->estado_cliente = "confirmado";
                $getcliente->update();

                for ($i=0; $i <count($getventa); $i++) { 
                    $getventa[$i]->idcliente_idventa = $getcliente->id_ventacliente;
                    $getventa[$i]->estado_venta = "confirmado";
                    $getventa[$i]->update();
                }
                return redirect()->route('ventas_index');                
            }else{            
                return "error en la actualizacion";
            }
        }
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

    function listaventas(){
        return venta::select()
        ->where('estado_venta', '=', 'confirmado')
        ->join('ventaclientes', 'ventaclientes.id_ventacliente', '=', 'idcliente_idventa')
        ->join('inventarios', 'inventarios.codigoProducto', '=', 'cod_producto')->orderBy('fecha_venta', 'desc')->get();
    }
}