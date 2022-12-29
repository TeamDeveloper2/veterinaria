<?php

namespace App\Http\Controllers;
use App\Models\inventario;
use App\Exports\inventarioExport;
use App\Exports\inventarios2Export;
use App\Exports\inventarios3Export;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Illuminate\Http\Request;



class ReporteInventarioController extends Controller
{
    public function index()
    {
        //para filtar fecha
       // $fecha1 = now()->toDateString();
       // $fecha2 = now()->addDays(30)->toDateString();
       // $invs = inventario::whereBetween('fecha_vencimiento', [$fecha1, $fecha2])->get();
        //para filtar por cantidad 
       // $invs = inventario::where('cantidadActual','<=',10)->get(); 
        //obtiene todos los registros del modelo
       $invs = inventario::all();
        return view('InventarioReportes.index', compact('invs'));
    }
    

    public function pdf1()
    {
       //para filtar fecha
    $fecha1 = now()->toDateString();
    $fecha2 = now()->addDays(30)->toDateString();
    $invs = inventario::whereBetween('fecha_vencimiento', [$fecha1, $fecha2])->get();
    $pdf=PDF::loadView('InventarioReportes.pdf1',['invs'=>$invs]);
    return $pdf->stream();
       // return $pdf->download('_Inventario.pdf');
    }
    public function pdf2()
    {
       //para filtar por cantidad 
    $invs = inventario::where('cantidadActual','<=',10)->get(); 
    $pdf=PDF::loadView('InventarioReportes.pdf2',['invs'=>$invs]);
    return $pdf->stream();
        //descarga
       // return $pdf->download('_Inventario.pdf');
    }
    public function pdf3()
    {
       //obtiene todos los registros del modelo
    $invs = inventario::all();
    $pdf=PDF::loadView('InventarioReportes.pdf3',['invs'=>$invs]);
    return $pdf->stream();
        //descarga
       // return $pdf->download('_Inventario.pdf');
    }




    public function export() 
    {
       
    return Excel::download(new inventarioExport, 'Reporte.xlsx');
    }

    public function export2() 
    {
       
    return Excel::download(new Inventarios2Export, 'Reporte.xlsx');
    }
    public function export3() 
    {
       
    return Excel::download(new inventarios3Export, 'Reporte.xlsx');
    }
    

}
