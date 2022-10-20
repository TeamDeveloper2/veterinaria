<?php

namespace App\Http\Controllers;

use App\Models\csc;
use App\Models\mascota;
use Illuminate\Http\Request;

class CscController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
       $lista = $this->datosMascota();     
       $enumeracion = 1;
       return view('prueba', compact('lista', 'enumeracion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prueba');
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
                'csc_codmascota'=>$request->csc_codmascota,
                'globulosBlancos'=>$request->globulosBlancos,
                'globulosRojos'=>$request->globulosRojos,
                'hemoglobina'=>$request->hemoglobina,
                'plaquetas'=>$request->plaquetas,
                'precio'=>$request->precio,
                'fecha'=>$request->fecha,
            ]);
        csc::create($datos);        
        return redirect()->route('list_csc');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\csc  $csc
     * @return \Illuminate\Http\Response
     */
    public function show(csc $csc)
    {
        return view('lista', compact('datos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\csc  $csc
     * @return \Illuminate\Http\Response
     */
    public function edit($codcsc)
    {
        $getdato = csc::select()->where('codcsc', $codcsc)
        ->join('mascotas', 'cscs.csc_codmascota', '=', 'mascotas.codmascota')
        ->join('users', 'users.id', '=', 'mascotas.codmascota_cliente')->first();        
        return view('modificar', compact('getdato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\csc  $csc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, csc $csc)
    {
        $csc = csc::find($request->codcsc);        
        $csc->csc_codmascota = $request->csc_codmascota;
        $csc->precio = $request->precio;
        $csc->globulosBlancos = $request->globulosBlancos;
        $csc->globulosRojos = $request->globulosRojos;
        $csc->hemoglobina = $request->hemoglobina;
        $csc->plaquetas = $request->plaquetas;
        $csc->fecha = $request->fecha;
        $csc->update();        
        return redirect()->route('list_csc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\csc  $csc
     * @return \Illuminate\Http\Response
     */
    public function destroy(csc $csc)
    {
        //
    }

    /**
     * funciones recursivas
     */
    public function datosMascota(){
        $datos = csc::select()
        ->join('mascotas', 'mascotas.codmascota', '=', 'cscs.csc_codmascota')
        ->join('users', 'mascotas.codmascota_cliente', '=', 'users.id')
        ->orderBy('fecha', 'desc')
        ->get();
        return $datos;
    }

    public function getCscMascota($codigoMascota){
        $getdato = csc::select()->where('csc_codmascota', $codigoMascota)->get();
        return $getdato;
    }
}
