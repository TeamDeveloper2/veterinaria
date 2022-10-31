<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
}
