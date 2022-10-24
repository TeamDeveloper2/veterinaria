<?php

namespace App\Http\Controllers;

use App\Models\enfermedadescardiacas;
use App\Models\mascota;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

class EnfermedadescardiacasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getDatos = $this->getDatos();        
        $contador = 1;
        return view('listar', compact('getDatos', 'contador'));                    
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
        if(mascota::where('codmascota', $request->enfercard_codmascota )->exists()){
                $this->ValidarDatos($request);
                $datos=( 
                    [               
                        'enfercard_codmascota'=>$request->enfercard_codmascota,
                        'colesterolTotal'=>$request->colesterolTotal,
                        'nivelHDL'=>$request->nivelHDL,
                        'nivelLDL'=>$request->nivelLDL,
                        'niveltrigiceridos'=>$request->niveltrigiceridos,
                        'fecha'=>$request->fecha,
                    ]);        
                enfermedadescardiacas::create($datos);                     
            return redirect()->route('list_enfercardi');
        }else{
            return redirect()->back()->withErrors('codigo de la mascota no exite')->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\enfermedadescardiacas  $enfermedadescardiacas
     * @return \Illuminate\Http\Response
     */
    public function show(enfermedadescardiacas $enfermedadescardiacas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\enfermedadescardiacas  $enfermedadescardiacas
     * @return \Illuminate\Http\Response
     */
    public function edit(enfermedadescardiacas $enfermedadescardiacas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\enfermedadescardiacas  $enfermedadescardiacas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, enfermedadescardiacas $enfermedadescardiacas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\enfermedadescardiacas  $enfermedadescardiacas
     * @return \Illuminate\Http\Response
     */
    public function destroy(enfermedadescardiacas $enfermedadescardiacas)
    {
        //
    }

    public function ValidarDatos(Request $request){
        $messages = [
            'required' => 'datos vacios'
        ];

        $request->validate([
            'enfercard_codmascota' => 'required',
            'colesterolTotal' => 'required',
            'nivelHDL' => 'required',                    
            'nivelLDL' => 'required',
            'niveltrigiceridos' => 'required',
            'fecha' => 'required',
        ], $messages);        
    }

    public function getDatos(){
        return enfermedadescardiacas::select()->orderBy('fecha', 'desc')->get();
    }
}
