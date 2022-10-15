<?php

namespace App\Http\Controllers;

use App\Models\csc;
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
                'blobulosBlancos'=>$request->blobulosBlancos,
                'globulosRojos'=>$request->globulosRojos,
                'hemoglobina'=>$request->hemoglobina,
                'plaquetas'=>$request->plaquetas,
                'precio'=>$request->precio,
                'fecha'=>$request->fecha,
            ]);

        csc::create($datos);

        $getdatos = csc::get();

        foreach ($getdatos as $getdato) {
            echo $getdato."</br>";
        }
        return view('prueba');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\csc  $csc
     * @return \Illuminate\Http\Response
     */
    public function show(csc $csc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\csc  $csc
     * @return \Illuminate\Http\Response
     */
    public function edit(csc $csc)
    {
        //
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
        //
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
}
