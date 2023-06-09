<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitanteController extends Controller
{
    public function modelos(){
        return view('visitante.modelos');
    }
    
    public function garantia(){
        return view('visitante.garantia');
    }
}
