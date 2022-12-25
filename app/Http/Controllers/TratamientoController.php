<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Models\mascota;
use app\Models\registromedico;
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tratamiento  $tratamiento
     * @return \Illuminate\Http\Response
     */
    public function show( $tratamiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tratamiento  $tratamiento
     * @return \Illuminate\Http\Response
     */
    public function edit( $tratamiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tratamiento  $tratamiento
     * @return \Illuminate\Http\Response
     */
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
