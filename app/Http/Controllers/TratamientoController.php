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
        $m= mascota::all();
        return view('Tratamiento.indexT',compact('m'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //

    }


    public function show( $tratamiento)
    {
        //
      $m=mascota::find($tratamiento);
      $r['r']=registromedico::select('mascotas.*','enfermedads.*','tabletas.*')
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

        return view('Tratamiento.index',$r,$r1);
    }


    public function edit( $tratamiento)
    {
        //
    }


    public function update(Request $request, $tratamiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tratamiento  $tratamiento
     * @return \Illuminate\Http\Response
     */
    public function destroy( $tratamiento)
    {
        //
    }
}
