<?php

namespace App\Http\Controllers;

use App\Http\Requests\GarantiaRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\VendaRequest;
use Illuminate\Http\Request;
use App\Models\Aplicacoes;
use App\Models\Capacidade;
use App\Models\Geracao;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Produto;
use App\Models\Tipo;
use App\Models\Velocidade;
use App\Models\Venda;

class VisitanteController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    
    public function garantia(){
        return view('visitante.garantia');
    }
 
    public function show( GarantiaRequest $request){
        
        $request->validated();
        $produto = Produto::where('numero_serie', '=', $request->numero_serie)->get()->first();
        
        $venda = Venda::where('produto_id', $produto->id)->get()->first();
        if ($venda != null){
    
            $venda = Venda::where('produto_id', '=', $produto->id)->get()->first();
            $modelo = Modelo::where('id', '=', $produto->modelo_id)->get()->first();
            
            $produto->marca = Marca::where('id', '=', $produto->marca_id)->get()->pluck('nome_marca')->first();
            $produto->modelo = Modelo::where('id', '=', $produto->modelo_id)->get()->pluck('nome_modelo')->first();
            $produto->nome_produto = Modelo::where('id', '=', $produto->modelo_id)->get()->pluck('nome_produto')->first();
            $produto->capacidade = Capacidade::where('id', '=', $modelo->capacidade_id)->get()->pluck('capacidade')->first();
            $produto->tipo = Tipo::where('id', '=', $modelo->tipo_id)->get()->pluck('nome_tipo')->first();
            $produto->aplicacao = Aplicacoes::where('id', '=', $modelo->aplicacao_id)->get()->pluck('nome_aplicacao')->first();
            $produto->leitura = Velocidade::where('id', '=', $modelo->velocidade_id)->get()->pluck('leitura')->first();
            $produto->escrita = Velocidade::where('id', '=', $modelo->velocidade_id)->get()->pluck('escrita')->first();
            $produto->geracao = Geracao::where('id', '=', $modelo->geracao_id)->get()->pluck('geracao')->first();
            $produto->numero_serie = $produto->numero_serie;
            
            return view('visitante.garantia',['produto'=>$produto, 'venda'=>$venda]);
        }else{
            return redirect()->route('visitante.garantia')->withInput()->withErrors("Sem registro de venda para esse produto");
        }
        
    }
    
    public function modelos(){

        $modelos = Modelo::all();
        
        if($modelos != Null){
            foreach($modelos as $ssd){   
                $ssd->marca = Marca::where('id', '=', $ssd->marca_id)->get()->pluck('nome_marca')->first();
                $ssd->capacidade = Capacidade::where('id', '=', $ssd->capacidade_id)->get()->pluck('capacidade')->first();
                $ssd->tipo = Tipo::where('id', '=', $ssd->tipo_id)->get()->pluck('nome_tipo')->first();
                $ssd->aplicacao = Aplicacoes::where('id', '=', $ssd->aplicacao_id)->get()->pluck('nome_aplicacao')->first();
                $ssd->leitura = Velocidade::where('id', '=', $ssd->velocidade_id)->get()->pluck('leitura')->first();
                $ssd->escrita = Velocidade::where('id', '=', $ssd->velocidade_id)->get()->pluck('escrita')->first();
                $ssd->geracao = Geracao::where('id', '=', $ssd->geracao_id)->get()->pluck('geracao')->first();
                
                $disponibilidade = Produto::where('modelo_id', $ssd->id)->where('status', "Em estoque")->count();
                $ssd->disponibilidade = $disponibilidade; 
            }
            return view('visitante.modelos',['modelos'=>$modelos]);

        }else{
            return view('visitante.modelos');
        }
    }
}   
