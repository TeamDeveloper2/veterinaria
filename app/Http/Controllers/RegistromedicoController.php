<?php

namespace App\Http\Controllers;

use App\Models\registromedico;
use Illuminate\Http\Request;
use App\Models\emergencia;
use App\Models\mascota;
use App\Models\enfermedad;
use App\Models\User;
use App\Models\cliente;

class RegistromedicoController extends Controller
{
    public function index()
    {
        $registro['r'] = registromedico::select('mascotas.nombre','users.name','mascotas.color',
        'mascotas.especie','mascotas.raza','mascotas.fechaNacimiento','mascotas.genero',
        'mascotas.peso')
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

    public function show(registromedico $registromedico)
    {
        //
        return view('historico medico.mostrar');
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
