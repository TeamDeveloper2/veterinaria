<?php

namespace App\Http\Controllers;

use App\Models\cita;
use App\Models\User;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('prueba');
    }

    public function contact_post(Request $request)
    {            
        $codUser = 2;
        echo "Nombre: ".$request->input('nombre')."<br>";
        echo "Apellido: ".$request->apellido."<br>";
        echo "Msj: ".request('mensaje')."<br>";
        $datos=( 
            [               
                'codcita'=>$codUser,
                'consulta'=>$request->consulta,
                'curacion'=>$request->curacion,
                'ecografia'=>$request->ecografia,
                'hemograma'=>$request->hemograma,
                'radiografia'=>$request->radiografia,
                'registroMedico'=>$request->registroMedico,
                'spa'=>$request->spa,
                'otro'=>$request->otro,
                'fecha'=>$request->fecha,
            ]);
        cita::create($datos);

        $getcodUser = user::select('id', 'name', 'type')->where('id', '=', $codUser)->get();
        echo $getcodUser."<br>";
        $getdatecitas = cita::select('codcita', 'consulta', 'curacion')->where('codcita', '=', $codUser)->where('consulta', '=', 'true')->whereNull('curacion')->get();
        foreach ($getdatecitas as $getdatecita) {
            echo $getdatecita."<br>";
        }    
        return view('prueba');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
        dd($data);
        
        $getcodUser = user::select('id')->where('id', '=', $codgoUser)->get();
        dd($getcodUser);
        return cita::create([
            'consulta','curacion','ecografia','fecha','hemograma','otro','radiografia','registroMedico','spa',
            'name' => $data['name'],
            'apePaterno' => $data['apePaterno'],
            'apeMaterno' => $data['apeMaterno'],
            'fechNacimiento' => $data['fechNacimiento'],
            'Genero' => $data['Genero'],
            'Nacionalidad' => $data['Nacionalidad'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'type' => $data['type'],
        ]);
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
     * @param  \App\Models\cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show(cita $cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit(cita $cita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cita $cita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy(cita $cita)
    {
        //
    }
}
