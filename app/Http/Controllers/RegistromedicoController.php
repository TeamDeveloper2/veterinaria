<?php

namespace App\Http\Controllers;

use App\Models\registromedico;
use Illuminate\Http\Request;
use App\Models\emergencia;
use App\Models\mascota;
use App\Models\enfermedad;
use App\Models\User;
use App\Models\cliente;
use App\Models\tableta;

class RegistromedicoController extends Controller
{
    public function index()
    {
        $registro['r'] = registromedico::select('mascotas.nombre','users.name','mascotas.color',
        'mascotas.especie','mascotas.raza','mascotas.fechaNacimiento','mascotas.genero',
        'mascotas.peso','mascotas.codmascota')
        ->join('mascotas','registromedicos.codmasc','=','mascotas.codmascota')
        ->join('clientes','mascotas.codmascota_cliente','=','clientes.codCliente')
        ->join('users','clientes.codCliente','=','users.id')
        ->get();
        //return $registro;
        $r1=registromedico::count();
        return view('historico medico.index',$registro,compact('r1'));
    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($codmascota)
    {
        //
        $mascota = mascota::find($codmascota);
        $r['r'] = registromedico::select('users.name','mascotas.*','emergencias.*',
        'enfermedads.*','tabletas.*')
        ->where('registromedicos.codmasc','=',$mascota->codmascota)
       ->join('mascotas','registromedicos.codmasc','=','mascotas.codmascota')
       ->join('enfermedads','registromedicos.codenferm', '=','enfermedads.codenfermedad')
       ->join('tabletas','registromedicos.codtab','=','tabletas.codtableta')
       ->join('emergencias','registromedicos.codeme','=','emergencias.codemergencia')
       ->join('users','mascotas.codmascota_cliente', '=', 'users.id')
       ->get()->find(0);

       $r1['r1'] = registromedico::select('users.name','mascotas.*','emergencias.*',
       'enfermedads.*','tabletas.*')
       ->where('registromedicos.codmasc','=',$mascota->codmascota)
      ->join('mascotas','registromedicos.codmasc','=','mascotas.codmascota')
      ->join('enfermedads','registromedicos.codenferm','=','enfermedads.codenfermedad')
      ->join('tabletas','registromedicos.codtab','=','tabletas.codtableta')
      ->join('emergencias','registromedicos.codeme','=','emergencias.codemergencia')
      ->join('users','mascotas.codmascota_cliente', '=','users.id')
      ->get();

        //return $r;$r1;$r3;
        return view('historico medico.mostrar',$r,$r1);
    }

    public function edit(registromedico $registromedico)
    {
        //
    }

    public function update(Request $request, registromedico $registromedico)
    {
        //
    }

    public function destroy(registromedico $registromedico)
    {
        //
    }
}
