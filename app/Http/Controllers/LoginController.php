<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function formLogin()
    {
        return view('admin.login');
    }

    public function logar(LoginRequest $request)
    {

        $request->validated();

        $credentials = [
            "email" => $request->email,
            "password" => $request->password
        ];
        if (Auth::attempt($credentials) and Auth::user()->perfil_id == 1) {
            session_start();
            $_SESSION['email'] = $credentials['email'];

            return redirect()->route('admin.painel');
        } elseif (Auth::attempt($credentials) and Auth::user()->perfil_id == 2) {
            return redirect()->route('cliente.index');
        }

        // Redireciona de volta com os dados de entrada
        return redirect()->back()->withInput()->withErrors([
            'LoginInvalido' => 'E-mail ou senha inválidos.',
        ]);

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

    public function sair()
    {

        Auth::logout();
        return redirect()->route('index');
    }
}
