<?php

namespace App\Http\Controllers;

use App\Models\spa;
use App\Models\Cliente;
use App\Models\Mascota;
use App\Models\bitacora;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SpaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaSpa = $this->getlistaSpa();
        $enum = 1;
        return view('servicios.index', compact('listaSpa', 'enum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicios.registrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $existeRegistros = $this->existeClienteMascota($request->codigo_mascota, $request->codigo_cliente);
        //dd($existeRegistros);
        if ($existeRegistros && $request->fecha >= $this->fechaHoy()) {
            $registrarSpa = (
                [
                    'codspa_codcliente'=>$request->codigo_cliente,
                    'codspa_codmascota'=>$request->codigo_mascota,
                    'motivo'=>$request->motivo,
                    'otros'=>$request->otros,
                    'precio'=>$request->precio,
                    'fecha'=>$request->fecha
                ]
            );
            $bitacora = new bitacora();
            $bitacora->name = 'admin';
            $bitacora->causer_id = '1';
            $bitacora->long_name = 'servicio';
            $bitacora->descripcion = 'crear';
            $bitacora->subject_id = '15';
            $bitacora->save();

            spa::create($registrarSpa);
            return redirect()->route('spa.index');
        }else{
            return redirect()->back()->withErrors('Error al Registrar')->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\spa  $spa
     * @return \Illuminate\Http\Response
     */
    public function show($spa)
    {
        $getdato = $this->getItemSpa($spa);
        return view('servicios.mostrar', compact('getdato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\spa  $spa
     * @return \Illuminate\Http\Response
     */
    public function edit($codspa)
    {
        $update = $this->getItemSpa($codspa);
        return view('servicios.modificar', compact('update'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\spa  $spa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, spa $spa)
    {
        $spa = spa::find($request->codspa);
        $existeRegistro = $this->existeClienteMascota($request->codigo_mascota, $request->codigo_cliente);
        if ($existeRegistro && $request->fecha >= $this->fechaHoy()) {
            $spa->codspa_codcliente = $request->codigo_cliente;
            $spa->codspa_codmascota = $request->codigo_mascota;
            $spa->motivo = $request->motivo;
            $spa->precio = $request->precio;
            $spa->fecha = $request->fecha;

            $bitacora = new bitacora();
            $bitacora->name = 'admin';
            $bitacora->causer_id = '1';
            $bitacora->long_name = 'servicio';
            $bitacora->descripcion = 'edit';
            $bitacora->subject_id = '5';
            $bitacora->ip=$request->ip();
            $bitacora->save();

            $spa->update();
            return redirect()->route('spa.index');
        }else{
            return redirect()->back()->withErrors('Error al Actualizar')->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\spa  $spa
     * @return \Illuminate\Http\Response
     */
    public function destroy(spa $spa)
    {
        //
    }

    /**
     * FUNCIONES RECURRENTES
     */
    function getlistaSpa(){
        return spa::select()
        ->join('users', 'users.id', '=', 'spas.codspa_codcliente')
        ->join('mascotas', 'codmascota', '=', 'spas.codspa_codmascota')
        ->orderBy('fecha', 'desc')
        ->get();
    }

    function fechaHoy(){
        return Carbon::now()->isoformat('Y-M-D');
    }

    function getItemSpa($spa){
        return $existeRegistros = spa::select()
        ->where('codspa', $spa)
        ->join('users', 'users.id', '=', 'spas.codspa_codcliente')
        ->join('mascotas', 'mascotas.codmascota', '=', 'spas.codspa_codmascota')
        ->first();
    }

    function existeClienteMascota($mascota, $cliente){
        return mascota::where('codmascota', $mascota)->where('codmascota_cliente', $cliente)->exists();
    }
}
