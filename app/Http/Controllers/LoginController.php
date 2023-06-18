<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function formLogin(){
        return view('admin.login');
    }
    
    public function logar(Request $request){
        
        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];
        $feedback = [
            'usuario.email' => 'O usuário é obrigatório',
            'senha.required' => 'O campo senha é obrigatório' 
        ];
        $request->validate($regras, $feedback);

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
