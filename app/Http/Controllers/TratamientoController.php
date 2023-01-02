<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Models\mascota;
use App\Models\registromedico;
use app\Models\enfermedad;

class TratamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $m= mascota::select('mascotas.*')
        ->join('registromedicos','mascotas.codmascota','=','registromedicos.codmasc')->get();
        return view('Tratamiento.indexT',compact('m'));
        //
    }


    public function show( $tratamiento)
    {
        //
      $m=mascota::find($tratamiento);
      $r=registromedico::select('mascotas.*','enfermedads.*','tabletas.*')
      ->where('registromedicos.codmasc','=',$m->codmascota)
      ->join('mascotas','registromedicos.codmasc','=','mascotas.codmascota')
      ->join('enfermedads','registromedicos.codenferm','=','enfermedads.codenfermedad')
      ->join('tabletas','registromedicos.codtab','=','tabletas.codtableta')
      ->join('emergencias','registromedicos.codeme','=','emergencias.codemergencia')
      ->join('users','mascotas.codmascota_cliente', '=','users.id')
      ->first();

      $r1['r1']=registromedico::select('mascotas.*','enfermedads.*','tabletas.*')
      ->where('registromedicos.codmasc','=',$m->codmascota)
      ->join('mascotas','registromedicos.codmasc','=','mascotas.codmascota')
      ->join('enfermedads','registromedicos.codenferm','=','enfermedads.codenfermedad')
      ->join('tabletas','registromedicos.codtab','=','tabletas.codtableta')
      ->join('emergencias','registromedicos.codeme','=','emergencias.codemergencia')
      ->join('users','mascotas.codmascota_cliente', '=','users.id')
      ->get();
      if ($r!=null) {
      //return dd($r);
        return view('Tratamiento.index',$r1,compact('r'));
      }else {
        return redirect()->route('indextratamiento');
      }
    }


    public function edit( $tratamiento)
    {
        //
        $m=mascota::find($tratamiento);
        $r=registromedico::select('mascotas.*','enfermedads.*','tabletas.*')
        ->where('registromedicos.codmasc','=',$m->codmascota)
        ->join('mascotas','registromedicos.codmasc','=','mascotas.codmascota')
        ->join('enfermedads','registromedicos.codenferm','=','enfermedads.codenfermedad')
        ->join('tabletas','registromedicos.codtab','=','tabletas.codtableta')
        ->join('emergencias','registromedicos.codeme','=','emergencias.codemergencia')
        ->join('users','mascotas.codmascota_cliente', '=','users.id')
        ->first();

        $r1['r1']=registromedico::select('mascotas.*','enfermedads.*','tabletas.*')
        ->where('registromedicos.codmasc','=',$m->codmascota)
        ->join('mascotas','registromedicos.codmasc','=','mascotas.codmascota')
        ->join('enfermedads','registromedicos.codenferm','=','enfermedads.codenfermedad')
        ->join('tabletas','registromedicos.codtab','=','tabletas.codtableta')
        ->join('emergencias','registromedicos.codeme','=','emergencias.codemergencia')
        ->join('users','mascotas.codmascota_cliente', '=','users.id')
        ->get();
        if ($r!=null) {
        //return dd($r);
          return view('Tratamiento.modificar',$r1,compact('r','m'));
        }else {
          return redirect()->route('indextratamiento');
        }
    }


    public function update(Request $request, $tratamiento)
    {
        //
        $m=mascota::find($tratamiento);
        $r=registromedico::find($m->codmascota);
        $r->recomendacion=$request->input('recomendacion');
        
        $r->update();
        return redirect()->route('indextratamiento');
    }

    public function destroy( $tratamiento)
    {
        //
    }
}
