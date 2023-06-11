<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aplicacoes;
use App\Models\Capacidade;
use App\Models\Importacao;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Produto;
use App\Models\produto_detalhe;
use App\Models\Tipo;
use App\Models\Velocidade;
use App\Models\Venda;

class VisitanteController extends Controller
{
    public function login(){
        return view('admin.login');
    }
 
    public function modelos(){
        return view('visitante.modelos');
    }
    
    public function garantia(){
     
        return view('visitante.garantia');
    }
 
    public function show(Request $request){
        
        $produto_id = Produto::where('numero_serie', '=', $request->numero_serie)->get()->pluck('id')->first();
        $venda = null;
        if ($produto_id){

            $venda = Venda::where('produto_id', '=', $produto_id)->get()->first();

            $produto = produto_detalhe::where('produto_id', '=', $produto_id)->get()->first();
            $marca = Marca::where('id', '=', $produto->marca_id)->get()->pluck('nome_marca')->first();
            $produto->marca_id = $marca;
            $modelo = Modelo::where('id', '=', $produto->modelo_id)->get()->pluck('nome_modelo')->first();
            $produto->modelo_id = $modelo;
            $capacidade = Capacidade::where('id', '=', $produto->capacidade_id)->get()->pluck('tamanho')->first();
            $produto->capacidade_id = $capacidade;
            $tipo = Tipo::where('id', '=', $produto->tipo_id)->get()->pluck('nome_tipo')->first();
            $produto->tipo_id = $tipo;
            $aplicacao = Aplicacoes::where('id', '=', $produto->aplicacao_id)->get()->pluck('nome_aplicacao')->first();
            $produto->aplicacao_id = $aplicacao;
            $produto->numero_serie =Produto::where('numero_serie', '=', $request->numero_serie)->get()->pluck('numero_serie')->first();        
            return view('visitante.garantia',['produto'=>$produto, 'venda'=>$venda]);
        }else{
            return view('visitante.garantia');
        }
    }
    
}
