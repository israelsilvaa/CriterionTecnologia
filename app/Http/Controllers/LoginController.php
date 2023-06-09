<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function formLogin(){
        return view('admin.login');
    }
    
    public function logar(){
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";

        return redirect()->route('admin.painel');
    }


}
