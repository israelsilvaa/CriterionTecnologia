<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewPainel(){
        return view('admin.painel');
    }

    public function viewCadastroProduto(){
        return view('admin.cadastroProduto');
    }

    public function viewCadastroVenda(){
        return view('admin.cadastroVenda');
    }

}
