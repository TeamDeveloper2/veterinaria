<?php

namespace App\Http\Controllers;

use App\Models\bitacora;
use App\Models\cita;
use App\Models\User;
use App\Models\mascota;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CitaController extends Controller
{
    /***************************** ADMINISTRADOR *****************************/
    public function index(){
        $getdatoslista = $this->listacita();   
        $total = $this->listacita()->count();   
        $contador = 1;     
        return view('cita.administrador.index', compact('getdatoslista', 'contador', 'total'));
    }    

    public function MostrarReservaAdministrador($codcita){        
        $datos = cita::select()->where('codcita', $codcita)
        ->join('users', 'users.id', '=', 'citas.codcita_cliente')
        ->join('mascotas', 'citas.nombre_mascota', '=', 'mascotas.nombre')->first();
        return view('cita.administrador.mostrar', compact('datos'));
    }

    public function ModificiarReservaAdministrador(Request $request){
        $dato = cita::find($request->codcita);        
        $dato->estado = $request->input('estado');
        $dato->update();
        return redirect()->route('admin_citas');
    }

    public function BuscarFechaReservaAdministrador(Request $request){        
        $datosBuscado = cita::select()->where('fecha', $request->fecha)->join('users', 'users.id', '=', 'codcita_cliente')->orderBy('fecha', 'desc')->get();
        return view('cita.administrador.buscarfecha', compact('datosBuscado'));
    }

    /***************************** CLIENTE *****************************/
    public function reservarform(){
        $listMascota = $this->listaMascotas();
        return view ('cita.cliente.agregar',compact('listMascota'));
    }


    public function reservar_post(Request $request){        
        $coduser = auth()->user()->id;
        $getdateuser = user::select()->where('id', '=', $coduser)->first();        
        if ($getdateuser->type == 2) {
            $datos=(
                [
                    'codcita_cliente'=>$getdateuser->id,
                    'nombre_mascota'=>$request->nombre_mascota,
                    'motivo'=>$request->motivo,
                    'otro'=>$request->otro,
                    'fecha'=>$request->fecha,
                    'telefono'=>$request->telefono,
                ]);
            cita::create($datos);                        
            return redirect()->route('mostrarCita');
        }else{
            return redirect()->back()->withErrors('Fecha incorrecta')->withInput();
        }
    }

    public function mostrarreserva(){
        $coduser = auth()->user()->id;
        //obtiene el ultimo dato registrado
        $datos = cita::where('codcita_cliente', '=', $coduser)->join('users', 'users.id', '=', 'codcita_cliente')->orderBy('citas.fecha', 'desc')->first();
        //dd($datos);
        return view ('cita.cliente.mostrar', compact('datos'));
    }

    public function modificarReserva(){
        $getdatos = $this->mostrardatosreserva();
        $listMascota = $this->listaMascotas();
        return view ('cita.cliente.modificar', compact('getdatos', 'listMascota'));
    }

    public function actualizarReserva(Request $request, $codcita){        
            $dato = cita::find($codcita);
            $dato->nombre_mascota = $request->input('nombre_mascota');
            $dato->motivo = $request->input('motivo');
            $dato->otro = $request->input('otro');
            $dato->telefono = $request->input('telefono');
            $dato->fecha = $request->input('fecha');
            $dato->update();
            return redirect()->route('mostrarCita');
    }

/***************************** API *****************************/
    public function reservarCitaAPI(Request $request){
        $result = user::select()->where('id', '=', $request->codcita_cliente)->exists();        
        if($result){
            $datos=(
            [
                'codcita_cliente'=>$request->codcita_cliente,
                'nombre_mascota'=>$request->nombre_mascota,
                'motivo'=>$request->motivo,
                'otro'=>$request->otro,
                'fecha'=>$request->fecha,
                'telefono'=>$request->telefono
            ]);
            cita::create($datos);        
            return print("registro con exito");
        }else{
            return print("el registro no exite");
        }
    }

    public function actualizarReservaAPI(Request $request){        
        $dato = cita::find($request->codcita);
        try {
            $dato->nombre_mascota = $request->input('nombre_mascota');
            $dato->motivo = $request->input('motivo');
            $dato->otro = $request->input('otro');
            $dato->telefono = $request->input('telefono');
            $dato->fecha = $request->input('fecha');
            $dato->update();
            return "actualizacion exitosa";
        } catch (\Throwable $th) {
            return "registro no encontrado";
        }        
    }

    public function mostrarReservaAPI(Request $request){
        $reserva = cita::select()->where('codcita_cliente', '=', $request->codCliente)->orderBy('fecha', 'desc')->get()->first();
        return $reserva;
    }


/***************************** FUNCIONES RECURRENTES *****************************/
    function listaMascotas(){
        $coduser = auth()->user()->id;
        $datosMascota = mascota::select()->where('codmascota_cliente', $coduser)->get();
        return $datosMascota;
    }

    function mostrardatosreserva(){
        return $datos = cita::select()
        ->join('users', 'users.id', '=', 'citas.codcita_cliente')
        ->join('mascotas', 'citas.nombre_mascota', '=', 'mascotas.nombre')
        ->orderBy('citas.fecha', 'desc')->first();
    }

    function fechaHoy(){
        return Carbon::now()->isoformat('Y-M-D');
    }

    function listacita(){
        $getlistadatos = cita::select()->join('users', 'users.id', '=', 'codcita_cliente')->orderBy('fecha', 'desc')->get();
        return $getlistadatos;
    }
}
