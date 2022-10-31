<?php

namespace App\Http\Controllers;

use App\Models\cita;
use App\Models\User;
use App\Models\mascota;
use Illuminate\Http\Request;
use Carbon\Carbon;
use PDF;

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
            return redirect('/client/mostrar_reserva');
            /* $datoscita = cita::select()->where('codcita', '=', $coduser)->get();
            echo $datoscita; */
            return redirect('/client/mostrar_cita');
        }else{
            return redirect()->back()->withErrors('Fecha incorrecta')->withInput();
        }
    }

   /* public function mostrarreserva(){
        //obtiene el ultimo dato registrado
        $datos = cita::select()
        ->join('users', 'users.id', '=', 'citas.codcita')
        ->join('mascotas', 'users.id', '=', 'mascotas.codmascota_cliente')
        ->orderBy('citas.fecha', 'desc')->first();
    public function mostrarreserva(){
        $datos = $this->mostrardatosreserva();
        return view ('cita.mostrar', compact('datos'));
    }
     */
    public function modificarReserva(){
        $getdatos = $this->mostrardatosreserva();
        $listMascota = $this->listaMascotas();
        return view ('cita.modificar', compact('getdatos', 'listMascota'));
    }

    public function actualizarReserva(Request $request, $codcita){
        if( $request->fecha > $this->fechaHoy()){
            $dato = cita::find($codcita);
            $dato->nombre_mascota = $request->('nombre_mascota');
            $dato->motivo = $request->('motivo');
            $dato->otro = $request->('otro');
            $dato->telefono = $request->('telefono');
            $dato->fecha = $request->('fecha');
            $dato->update();
            return redirect()->route('mostrarCita');
        }else{
            return redirect()->back()->withErrors('Fecha incorrecta')->withInput();
        }
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

}
