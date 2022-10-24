<?php

namespace App\Http\Controllers;

use App\Models\hemograma;
use Illuminate\Http\Request;

class HemogramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('hemograma.index');
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
     * @param  \App\Models\hemograma  $hemograma
     * @return \Illuminate\Http\Response
     */
    public function show(hemograma $hemograma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hemograma  $hemograma
     * @return \Illuminate\Http\Response
     */
    public function edit(hemograma $hemograma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hemograma  $hemograma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hemograma $hemograma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hemograma  $hemograma
     * @return \Illuminate\Http\Response
     */
    public function destroy(hemograma $hemograma)
    {
        //
    }
}
