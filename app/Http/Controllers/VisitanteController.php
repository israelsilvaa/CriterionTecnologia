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
        
        $produto = Produto::where('numero_serie', '=', $request->numero_serie)->get()->first();
        // dd($produto);
        $venda = null;
        
        // if(isset($produto)){
        // }

        if($produto != Null){
            $venda = Venda::where('produto_id', '=', $produto->id)->get()->first();
            
            $produto->marca_id = Marca::where('id', '=', $produto->marca_id)->get()->pluck('nome_marca')->first();
            $produto->modelo_id = Modelo::where('id', '=', $produto->modelo_id)->get()->pluck('nome_modelo')->first();
            $produto->capacidade_id = Capacidade::where('id', '=', $produto->capacidade_id)->get()->pluck('capacidade')->first();
            $produto->tipo_id = Tipo::where('id', '=', $produto->tipo_id)->get()->pluck('nome_tipo')->first();
            $produto->aplicacao_id = Aplicacoes::where('id', '=', $produto->aplicacao_id)->get()->pluck('nome_aplicacao')->first();
            $produto->leitura = Velocidade::where('id', '=', $produto->velocidade_id)->get()->pluck('leitura')->first();
            $produto->escrita = Velocidade::where('id', '=', $produto->velocidade_id)->get()->pluck('escrita')->first();
            
            return view('visitante.garantia',['produto'=>$produto, 'venda'=>$venda]);
        }else{
            return view('visitante.garantia');
        }
    }
    
}
