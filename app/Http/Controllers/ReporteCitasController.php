<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cita;
use App\Models\User;
use App\Models\mascota;
use Carbon\Carbon;
use PDF;
class ReporteCitasController extends Controller
{
    public function index()
    {
        $contador = 1 ;
        $getdatoslista = $this->listacita();   
        $total = $this->listacita()->count();   
         
        return view('CitaReportes.index', compact('getdatoslista', 'contador', 'total'));
    }
    public function pdf1()
    {
        $nombre= "reporte de cita completo";
        $contador = 1 ;
        $getdatoslista = $this->listacita(); 
       //obtiene todos los registros del modelo
    
    $pdf=PDF::loadView('CitaReportes.pdf1',['getdatoslista'=>$getdatoslista],['contador'=>$contador])->setPaper('a4');
  
    return $pdf->stream(); 
        //descarga
    //    return $pdf->download('_Inventario.pdf');
    }
    public function pdf2(){
        $nombre= "reporte de cita mensual";
        $contador = 1 ;
        $getdatoslista = $this->listacita();
        $getdatoslista=$getdatoslista->where('fecha','>=', Carbon::now()->subMonth(1));
        $pdf=PDF::loadView('CitaReportes.pdf1',['getdatoslista'=>$getdatoslista],['contador'=>$contador])->setPaper('a4');
  
         return $pdf->stream(); 
         //descarga
    //    return $pdf->download('_Inventario.pdf');
    }
    public function pdf3(){
        $nombre= "reporte de cita semanal";
        $contador = 1 ;
        $getdatoslista = $this->listacita();
        $getdatoslista=$getdatoslista->where('fecha','>=', Carbon::now()->subWeek(2));
        $pdf=PDF::loadView('CitaReportes.pdf1',['getdatoslista'=>$getdatoslista],['contador'=>$contador])->setPaper('a4');
  
         return $pdf->stream(); 
         //descarga
    //    return $pdf->download('_Inventario.pdf');
    }












    function listaMascotas(){
        $coduser = auth()->user()->id;
        $datosMascota = mascota::select()->where('codmascota_cliente', $coduser)->get();
        return $datosMascota;
    }

    function mostrardatosreserva(){
        return $datos = cita::select()
        ->join('users', 'users.id', '=', 'citas.codcita_cliente')
        ->join('mascotas', 'citas.nombre_mascota', '=', 'mascotas.nombre')
        ->orderBy('citas.fecha', 'desc')->first();
    }

    function fechaHoy(){
        return Carbon::now()->isoformat('Y-M-D');
    }

    function listacita(){
        $getlistadatos = cita::select()->join('users', 'users.id', '=', 'codcita_cliente')->orderBy('fecha', 'desc')->get();
        return $getlistadatos;
    }
}
