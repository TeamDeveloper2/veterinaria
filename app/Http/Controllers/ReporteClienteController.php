<?php

namespace App\Http\Controllers;

use App\Models\User;
use PDF;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class ReporteClienteController extends Controller
{
    public function index()
    {
        $c['cc'] = user::all(); 
        return view('ClienteReportes.index',$c);
    }
    public function pdf1()
    {
        $c['cc'] = user::where('type','=','2')->get();
       //obtiene todos los registros del modelo
    
    $pdf=PDF::loadView('ClienteReportes.pdf1',['cc'=>$c['cc']])->setPaper('a4');
  
    return $pdf->stream(); 
        //descarga
    //    return $pdf->download('_Inventario.pdf');
    }
    public function pdf2()
    {
        $c['cc'] = user::where('fecha_venta','>=', Carbon::now()->subWeeks(2));
       //obtiene todos los registros del modelo
    
    $pdf=PDF::loadView('ClienteReportes.pdf1',['cc'=>$c['cc']])->setPaper('a4');
  
    return $pdf->stream(); 
        //descarga
    //    return $pdf->download('_Inventario.pdf');
    }
    public function pdf3()
    {
        $c['cc'] = user::where('fecha_venta','>=', Carbon::now()->subMonths(1));
        //obtiene todos los registros del modelo
     
     $pdf=PDF::loadView('ClienteReportes.pdf1',['cc'=>$c['cc']])->setPaper('a4');
   
     return $pdf->stream(); 
         //descarga
     //    return $pdf->download('_Inventario.pdf');
    }


}
