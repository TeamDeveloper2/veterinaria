<?php

namespace App\Http\Controllers;

use App\Models\cirugia;
use App\Models\Mascota;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CirugiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista = $this->getListaCirugia();        
        $enum = 1;
        return view('cirugias.index', compact('lista', 'enum'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cirugias.registrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $existe = $this->existeRegistro($request->codcirugia_codcliente, $request->codcirugia_codmascota);
        if ($existe && $request->fecha >= $this->fechaHoy()) {
            $registrarCirugia = (
                [
                    'codcirugia_codcliente' => $request->codcirugia_codcliente,
                    'codcirugia_codmascota' => $request->codcirugia_codmascota,
                    'tipo_cirugia' => $request->tipo_cirugia,
                    'precio' => $request->precio,
                    'fecha' => $request->fecha
                ]
            );            
            cirugia::create($registrarCirugia);
            return redirect()->route('cirugia.index');
        }else{
            return redirect()->back()->withErrors('Error al Registrar')->withInput();
        }     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cirugia  $cirugia
     * @return \Illuminate\Http\Response
     */
    public function show($codcirugia)
    {
        $getdato = $this->getItemCirugia($codcirugia);
        return view('cirugias.mostrar', compact('getdato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cirugia  $cirugia
     * @return \Illuminate\Http\Response
     */
    public function edit($codcirugia)
    {
        $getdato = $this->getItemCirugia($codcirugia);
        return view('cirugias.modificar', compact('getdato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cirugia  $cirugia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cirugia $cirugia)
    {
        $cirugia = cirugia::find($request->codcirugia);
        $existe = $this->existeRegistro($request->codcirugia_codcliente, $request->codcirugia_codmascota);
        if ($existe && $request->fecha >= $this->fechaHoy()) {
            $cirugia->codcirugia_codcliente = $request->codcirugia_codcliente;
            $cirugia->codcirugia_codmascota = $request->codcirugia_codmascota;
            $cirugia->tipo_cirugia = $request->tipo_cirugia;
            $cirugia->precio = $request->precio;
            $cirugia->fecha = $request->fecha;
            $cirugia->update();
            return redirect()->route('cirugia.index');
        }else{
            return redirect()->back()->withErrors('Error al Actualizar')->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cirugia  $cirugia
     * @return \Illuminate\Http\Response
     */
    public function destroy(cirugia $cirugia)
    {
        //
    }

    /** FUNCIONES RECURSIVAS */
    function getListaCirugia(){
        return cirugia::select()
        ->join('users', 'users.id', '=', 'codcirugia_codcliente')
        ->join('mascotas', 'mascotas.codmascota', '=', 'codcirugia_codmascota')
        ->orderBy('fecha', 'desc')
        ->get();
    }

    function existeRegistro($codCliente, $codMascota){
        return Mascota::select()
        ->where('codmascota_cliente', $codCliente)
        ->where('codmascota', $codMascota)->exists();
    }

    function fechaHoy(){
        return Carbon::now()->isoformat('Y-M-D');
    }

    function getItemCirugia($codcirugia){
        return cirugia::select()->where('codcirugia', $codcirugia)
        ->join('users', 'users.id', '=', 'codcirugia_codcliente')
        ->join('mascotas', 'mascotas.codmascota', '=', 'codcirugia_codmascota')
        ->first();
    }
}
