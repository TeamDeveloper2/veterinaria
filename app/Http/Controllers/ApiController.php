<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\mascota;
use App\Models\cliente;
use App\Models\bitacora;
use Illuminate\Support\Facades\Hash;


class ApiController extends Controller
{
    //
    public function users(Request $request){
        $use= User::all();
        return response()->json($use);
    }


    public function login(Request $request){
        $resp = ["estado"=>0,"msg"=>""];
        $dato = json_decode($request->getContent());
        $u = User::where('email',$dato->email)->first();
        //return response()->json($u);
        if($u){
            if(Hash::check($dato->password,$u->password)){
                $token=$u->createToken("example");
                $resp["estado"]=1;
                $resp["msg"]=$token->plainTextToken;
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

    public function aggCliente(Request $request){

        $c=new User();
        $cc=new cliente();
        $c->name=$request->input('nombres');
        $c->apePaterno=$request->input('pat');
        $c->apeMaterno=$request->input('mat');
        $c->fechNacimiento=$request->input('nac');
        $c->Genero=$request->input('gen');
        $c->Nacionalidad=$request->input('nacional');
        $c->email=$request->input('correo');
        $c->save();

        $cc->id=$c->id;
        $cc->save();

        $bitacora = new bitacora();
        $bitacora->name = 'admin';
        $bitacora->causer_id = $c->id;
        $bitacora->long_name = 'cliente';
        $bitacora->descripcion = 'crear';
        $bitacora->subject_id = $c->id;
        $bitacora->save();
    }
    public function ListarMascota(){
        $masc=mascota::all();
        return $masc;
    }
}
