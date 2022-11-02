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
        $lista = $this->datosMascotaEnferCardiacas();
        $total = $this->datosMascotaEnferCardiacas()->count();
        $enumeracion = 1;
        return view('hemograma.enfermedades cardiacas.index', compact('lista', 'enumeracion', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hemograma.enfermedades cardiacas.registrar');
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
            return redirect()->route('enfermedadesCardiacas_index');
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
    public function show($codenfercardiacas)
    {
        $getdato = $this->getItemEnfermedadesCardiacas($codenfercardiacas);        
        return view('hemograma.enfermedades cardiacas.mostrar', compact('getdato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\enfermedadescardiacas  $enfermedadescardiacas
     * @return \Illuminate\Http\Response
     */
    public function edit(enfermedadescardiacas $enfermedadescardiacas, $codenfercardiacas)
    {
        $getdato = $this->getItemEnfermedadesCardiacas($codenfercardiacas);
        return view('hemograma.enfermedades cardiacas.modificar', compact('getdato'));
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
        $enfermedadescardiacas = enfermedadescardiacas::find($request->codenfercardiacas);        
        $enfermedadescardiacas->enfercard_codmascota = $request->enfercard_codmascota;
        $enfermedadescardiacas->colesterolTotal = $request->colesterolTotal;
        $enfermedadescardiacas->nivelHDL = $request->nivelHDL;
        $enfermedadescardiacas->nivelLDL = $request->nivelLDL;
        $enfermedadescardiacas->niveltrigiceridos = $request->niveltrigiceridos;
        $enfermedadescardiacas->fecha = $request->fecha;        
        $enfermedadescardiacas->update();        
        return redirect()->route('enfermedadesCardiacas_index');
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

    public function datosMascotaEnferCardiacas(){
        $datos = enfermedadescardiacas::select()
        ->join('mascotas', 'mascotas.codmascota', '=', 'enfercard_codmascota')
        ->join('users', 'mascotas.codmascota_cliente', '=', 'users.id')
        ->orderBy('fecha', 'desc')
        ->get();
        return $datos;
    }

    public function getItemEnfermedadesCardiacas($codenfercardiacas){
        $getItem = enfermedadescardiacas::select()->where('codenfercardiacas', $codenfercardiacas)
        ->join('mascotas', 'enfercard_codmascota', '=', 'mascotas.codmascota')
        ->join('users', 'users.id', '=', 'mascotas.codmascota_cliente')->first();        
        return $getItem;
    }
}
