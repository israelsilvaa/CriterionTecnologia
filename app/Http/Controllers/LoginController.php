<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function formLogin(){
        return view('admin.login');
    }
    
    public function logar(LoginRequest $request){
        
        $request->validated();
        
        $credentials = [
            "email" => $request->usuario,
            "password" => $request->senha
        ];
        if( Auth::attempt($credentials) and Auth::user()->perfil_id == 1){
            session_start();
            $_SESSION['email'] = $credentials['email'];

            return redirect()->route('admin.painel');

        }elseif(Auth::attempt($credentials) and Auth::user()->perfil_id == 2){
            return redirect()->route('cliente.painel');
        }
    
        return redirect()->route('login');
        
        // $user = new User();
        
        // $usuario = $user->where('email',$email)
        // ->where('password',$senha)
        // ->get()
        //                 ->first();
        
        // if (isset($usuario->perfil_id) and $usuario->perfil_id == 1){        
        //     session_start();
        //     $_SESSION['nome'] = $usuario->name;
        //     $_SESSION['email'] = $usuario->email;
        //     return redirect()->route('admin.painel');
            
        // }elseif(isset($usuario->perfil_id) and $usuario->perfil_id == 2){
        //     return redirect()->route('cliente.painel');
            
        // }else{
        //     return redirect()->route('login');
            
        // }    
    }

    public function sair(){

        session_destroy();
        return redirect()->route('index');
    }
}
