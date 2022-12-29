<?php

namespace App\Http\Controllers;

use App\Exports\ventaExport;
use App\Models\venta;
use App\Models\inventario;
use App\Models\ventacliente;
use App\Models\devoluciones;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class ReporteVentaController extends Controller
{
    //$listaventa
    public function index()
    {
        $enum = 1;
        $listaventa = $this->listaventas();         
        return view('VentaReportes.index', compact('listaventa','enum'));
    }
    
    public function pdf1()
    {
        $enum = 1 ;
        $listaventa = $this->listaventas(); 
       //obtiene todos los registros del modelo
    
    $pdf=PDF::loadView('Ventareportes.pdf1',['listaventa'=>$listaventa],['enum'=>$enum])->setPaper('a4');
  
    return $pdf->stream(); 
        //descarga
    //    return $pdf->download('_Inventario.pdf');
    }
    public function pdf2(){
        $enum = 1 ;
        $listaventa = $this->listaventas();
        $listaventa=$listaventa->where('fecha_venta','>=', Carbon::now()->subMonth(1));
        $pdf=PDF::loadView('Ventareportes.pdf2',['listaventa'=>$listaventa],['enum'=>$enum])->setPaper('a4','landscape');
  
         return $pdf->stream(); 
         //descarga
    //    return $pdf->download('_Inventario.pdf');
    }
    public function pdf3(){
        $enum = 1 ;
        $listaventa = $this->listaventas();
        $listaventa=$listaventa->where('fecha_venta','>=', Carbon::now()->subMonth(3));
        $pdf=PDF::loadView('Ventareportes.pdf2',['listaventa'=>$listaventa],['enum'=>$enum])->setPaper('a4', 'landscape');
  
         return $pdf->stream(); 
         //descarga
    //    return $pdf->download('_Inventario.pdf');
    }
    public function pdf4(){
        $enum = 1 ;
        $listaventa = $this->listaventas();
        $listaventa=$listaventa->where('fecha_venta','>=', Carbon::now()->subMonth(6));
        $pdf=PDF::loadView('Ventareportes.pdf2',['listaventa'=>$listaventa],['enum'=>$enum])->setPaper('a4', 'landscape');
  
         return $pdf->stream(); 
    }
    public function pdf5(){
        $enum = 1 ;
        $listaventa = $this->listaventas();
        $listaventa=$listaventa->where('fecha_venta','>=', Carbon::now()->subYears(1));
        $pdf=PDF::loadView('Ventareportes.pdf2',['listaventa'=>$listaventa],['enum'=>$enum])->setPaper('a4', 'landscape');
  
         return $pdf->stream();  
    }
    public function export() 
    {
       
    return Excel::download(new ventaExport, 'Reporte.xlsx');
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
        ->join('inventarios', 'inventarios.codigoProducto', '=', 'cod_producto')->orderBy('fecha_venta', 'desc')->get();
    }    
}
