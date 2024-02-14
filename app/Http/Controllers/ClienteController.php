<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClienteController extends Controller
{
    public function viewPainel(){
        return view('cliente.index');
    }

    public function sair(){

        Auth::logout();
        return redirect()->route('visitante.index');
    }
}
