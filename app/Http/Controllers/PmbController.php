<?php

namespace App\Http\Controllers;

use App\Models\pmb;
use Illuminate\Http\Request;
use App\Http\Controllers\CscController;

class PmbController extends Controller
{            
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista = $this->getMascotasPmb();     
        $enumeracion = 1;
        return view('listar', compact('lista', 'enumeracion'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
        return view('registrar');        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos=( 
            [               
                'pmb_codmascota'=>$request->pmb_codmascota,
                'calcio'=>$request->calcio,
                'electrocitos'=>$request->electrocitos,
                'glucosa'=>$request->glucosa,
                'fecha'=>$request->fecha,
            ]);
        pmb::create($datos);        
        return redirect()->route('list_pmb');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pmb  $pmb
     * @return \Illuminate\Http\Response
     */
    public function show(pmb $pmb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pmb  $pmb
     * @return \Illuminate\Http\Response
     */
    public function edit($codpmb)
    {        
        $getdato = pmb::select()->where('codpmb', $codpmb)
        ->join('mascotas', 'pmb_codmascota', '=', 'mascotas.codmascota')
        ->join('users', 'users.id', '=', 'mascotas.codmascota_cliente')->first();        
        return view('modificar', compact('getdato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pmb  $pmb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pmb $pmb)
    {
        $pmb = pmb::find($request->codpmb);        
        $pmb->pmb_codmascota = $request->pmb_codmascota;
        $pmb->calcio = $request->calcio;
        $pmb->electrocitos = $request->electrocitos;
        $pmb->glucosa = $request->glucosa;
        $pmb->fecha = $request->fecha;
        $pmb->update();        
        return redirect()->route('list_pmb');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pmb  $pmb
     * @return \Illuminate\Http\Response
     */
    public function destroy(pmb $pmb)
    {
        //
    }

    /**
     * funciones recurrentes
     */
    public function getMascotasPmb(){
        $datos = pmb::select()
        ->join('mascotas', 'mascotas.codmascota', '=', 'pmbs.pmb_codmascota')
        ->join('users', 'mascotas.codmascota_cliente', '=', 'users.id')
        ->orderBy('fecha', 'desc')
        ->get();
        return $datos;
    }
}
