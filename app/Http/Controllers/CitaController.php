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
    public function index(){
        return view('cita.index');
    }

    public function reservarform(){
        $listMascota = $this->listaMascotas();
        return view ('cita.agregar',compact('listMascota'));
    }


    public function reservar_post(Request $request){
        $coduser = auth()->user()->id;
        $getdateuser = user::select('type')->where('id', '=', $coduser)->first();
        if ($getdateuser->type == 2) {
            $datos=(
                [
                    'codcita_cliente'=>$coduser,
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

        $bitacora = new bitacora();
        $bitacora->name = 'admin';
        $bitacora->causer_id = $coduser;
        $bitacora->long_name = 'cita';
        $bitacora->descripcion = 'crear';
        $bitacora->subject_id = 15;
        $bitacora->ip=$request->ip();

        $bitacora->save();
    }

    public function mostrarreserva(){
        //obtiene el ultimo dato registrado
        $datos = cita::select()
        ->join('users', 'users.id', '=', 'citas.codcita')
        ->join('mascotas', 'users.id', '=', 'mascotas.codmascota_cliente')
        ->orderBy('citas.fecha', 'desc')->first();    
        return view ('cita.mostrar', compact('datos'));
    }

    public function modificarReserva(){
        $getdatos = $this->mostrardatosreserva();
        $listMascota = $this->listaMascotas();
        return view ('cita.modificar', compact('getdatos', 'listMascota'));
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

            $bitacora = new bitacora();
            $bitacora->name = 'admin';
            $bitacora->causer_id = 1;
            $bitacora->long_name = 'cita';
            $bitacora->descripcion = 'crear';
            $bitacora->subject_id = $codcita;
            $bitacora->ip=$request->ip();

            $bitacora->save();
    }


    //funciones recurrentes
    public function listaMascotas(){
        $coduser = auth()->user()->id;
        $datosMascota = mascota::select()->where('codmascota_cliente', $coduser)->get();
        return $datosMascota;
    }

    public function mostrardatosreserva(){
        return $datos = cita::select()
        ->join('users', 'users.id', '=', 'citas.codcita_cliente')
        ->join('mascotas', 'citas.nombre_mascota', '=', 'mascotas.nombre')
        ->orderBy('citas.fecha', 'desc')->first();
    }

    public function fechaHoy(){
        return Carbon::now()->isoformat('Y-M-D');
    }
}
