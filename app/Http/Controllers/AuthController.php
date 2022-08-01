<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login(Request $request){
        $dados = $request->all(['email', 'password']);
        // Autenticate the user...
       $token = auth('api')->attempt($dados);
        if($token){
            return response()->json(['token' => $token], 200);
        }else{
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        return $token;
    }
    public function logout(){
        auth('api')->logout();
        return response()->json('logout');
    }
    public function refresh(){
        $token = auth('api')->refresh();
        return response()->json($token);
    }
    public function me(){

        return auth('api')->user();
    }
}
