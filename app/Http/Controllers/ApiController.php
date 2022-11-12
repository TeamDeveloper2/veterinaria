<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\mascota;
use App\Models\cliente;
use App\Models\bitacora;
use App\Models\registromedico;
use Illuminate\Support\Facades\Hash;


class ApiController extends Controller
{
    //
    public function users(Request $request){
        $use= User::all();
        return response()->json($use);
    }


    public function login(Request $request){
       // $resp = ["estado"=>0,"msg"=>""];
        $dato = json_decode($request->getContent());
        $u = User::where('email',$dato->email)->first();
       // return response()->json($u);
        if($u){
            if(Hash::check($dato->password,$u->password)){
                $token=$u->createToken("example");
               // $resp["estado"]=1;
                $resp["token"]=$token->plainTextToken;
            }else{
            $resp["msg"]="No es la contraseña !!";
            }
        }else{
          $resp["msg"]="Usted no es Usuario";
        }
       return $resp;
    }

    public function ListarCliente(){
        $cl=User::all();
        return $cl;
    }

    public function vistaCrear()
    {
        return view('cliente.agregar'); // la vista movil iria en el return
    }
    public function aggCliente(Request $request){

        $c=new User();
        $cc=new cliente();

        $c->name=$request->nombres;
        $c->apePaterno=$request->pat;
        $c->apeMaterno=$request->mat;
        $c->fechNacimiento=$request->nac;
        $c->Genero=$request->gen;
        $c->Nacionalidad=$request->nacional;
        $c->email=$request->correo;
        $c->password=$request->contra;
        $c->save();

        $cc->codCliente=$c->id;
        $cc->save();

    }
    public function ListarMascota(){
        $masc=mascota::all();
        return $masc;
    }

    public function vistaMasco(){
        $n = user::all();
        return view ('mascota.agregar',compact('n'));
    }

    public function aggMasco(Request $request)
    {
        $d=new mascota();
        $d->nombre= $request->nombre;
        $d->raza=$request->raza;
        $d->color=$request->color;
        $d->genero=$request->genero;
        $d->especie=$request->especie;
        $d->fechaNacimiento=$request->fecha_nacimiento;
        $d->peso=$request->peso;
        $d->codmascota_cliente=$request->empleado;
        $d->save();

        $r = new registromedico();
        $r->codmasc=$d->codmascota;
        $r->save();


    }
}
