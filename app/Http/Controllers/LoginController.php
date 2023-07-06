<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function formLogin(){
        return view('admin.login');
    }
    
    public function logar(LoginRequest $request){
        
        $request->validated();

        $usuario = $request->usuario;
        $senha = $request->senha;

        $user = new User();

        $existe = $user->where('email',$usuario)
                        ->where('password',$senha)
                        ->get()
                        ->first();
        
        if (isset($existe->perfil_id) and $existe->perfil_id == 1){
        
            return redirect()->route('admin.painel');

        }elseif(isset($existe->perfil_id) and $existe->perfil_id == 2){
        
            return redirect()->route('cliente.painel');
        }else{
            return redirect()->route('login');
        }
    }
}
