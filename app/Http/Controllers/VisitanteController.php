<?php

namespace App\Http\Controllers;

use App\Http\Requests\GarantiaRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\VendaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    public function login()
    {
        return view('admin.login');
    }

    public function garantia()
    {
        return view('visitante.garantia');
    }

    public function show(GarantiaRequest $request)
    {

        $request->validated();
        $produto = Produto::where('numero_serie', '=', $request->numero_serie)->get()->first();

        $venda = Venda::where('produto_id', $produto->id)->get()->first();
        if ($venda != null) {

            $venda = Venda::where('produto_id', '=', $produto->id)->get()->first();
            $venda->numero_serie = $produto->numero_serie;
            $modelo = Modelo::where('id', '=', $produto->modelo_id)->get()->first();

            $produto->marca = Marca::where('id', '=', $produto->marca_id)->get()->pluck('nome_marca')->first();
            $produto->modelo = Modelo::where('id', '=', $produto->modelo_id)->get()->pluck('nome_modelo')->first();
            $produto->imagem_card = Modelo::where('id', '=', $produto->modelo_id)->get()->pluck('imagem_card')->first();
            $produto->nome_produto = Modelo::where('id', '=', $produto->modelo_id)->get()->pluck('nome_produto')->first();
            $produto->capacidade = Capacidade::where('id', '=', $modelo->capacidade_id)->get()->pluck('capacidade')->first();
            $produto->tipo = Tipo::where('id', '=', $modelo->tipo_id)->get()->pluck('nome_tipo')->first();
            $produto->aplicacao = Aplicacoes::where('id', '=', $modelo->aplicacao_id)->get()->pluck('nome_aplicacao')->first();
            $produto->leitura = Velocidade::where('id', '=', $modelo->velocidade_id)->get()->pluck('leitura')->first();
            $produto->escrita = Velocidade::where('id', '=', $modelo->velocidade_id)->get()->pluck('escrita')->first();
            $produto->geracao = Geracao::where('id', '=', $modelo->geracao_id)->get()->pluck('geracao')->first();
            $produto->numero_serie = $produto->numero_serie;

            return view('visitante.garantia', ['produto' => $produto, 'venda' => $venda]);
        } else {
            return redirect()->route('visitante.garantia')->withInput()->withErrors("Sem registro de venda para esse produto");
        }
    }

    public function sobre_nos()
    {
        return view('visitante.sobre-nos');
    }
    public function produto(int $modelo_id, $disponibilidade)
    {
        $modelo = DB::table("modelos")
        ->join("marcas", "modelos.marca_id", "=", "marcas.id")
        ->join("tipos", "modelos.tipo_id", "=", "tipos.id")
        ->join("capacidades", "modelos.capacidade_id", "=", "capacidades.id")
        ->join("velocidades", "modelos.velocidade_id", "=", "velocidades.id")
        ->join("aplicacoes", "modelos.aplicacao_id", "=", "aplicacoes.id")
        ->join("geracoes", "modelos.geracao_id", "=", "geracoes.id")
        ->join("dimensoes", "modelos.dimensoes_id", "=", "dimensoes.id")
        ->select(
            "modelos.nome_produto as produto",
            "modelos.preco",
            "marcas.nome_marca as marca",
            "modelos.nome_modelo as modelo",
            "tipos.nome_tipo as tipo", 
            "capacidades.capacidade", 
            "velocidades.leitura", 
            "velocidades.escrita", 
            "aplicacoes.nome_aplicacao as aplicacao", 
            "geracoes.geracao",
            "modelos.id as modelo_id",
            "dimensoes.altura",
            "dimensoes.largura",
            "dimensoes.profundidade",
            "dimensoes.unidade_medida",
            "modelos.imagem_card",
        )
        ->where('modelos.id', $modelo_id)
        ->get()->first();
        // dd($disponibilidade);

        return view('visitante.produto', ['modelo'=>$modelo,'disponibilidade' => $disponibilidade]);
    }

    public function modelos()
    {
        $modelos = DB::table("modelos")
        ->join("marcas", "modelos.marca_id", "=", "marcas.id")
        ->join("tipos", "modelos.tipo_id", "=", "tipos.id")
        ->join("capacidades", "modelos.capacidade_id", "=", "capacidades.id")
        ->join("velocidades", "modelos.velocidade_id", "=", "velocidades.id")
        ->join("aplicacoes", "modelos.aplicacao_id", "=", "aplicacoes.id")
        ->join("geracoes", "modelos.geracao_id", "=", "geracoes.id")
        ->select(
            "modelos.nome_produto as produto",
            "modelos.preco",
            "marcas.nome_marca as marca",
            "modelos.nome_modelo as modelo",
            "tipos.nome_tipo as tipo", 
            "capacidades.capacidade", 
            "velocidades.leitura", 
            "velocidades.escrita", 
            "aplicacoes.nome_aplicacao as aplicacao", 
            "geracoes.geracao",
            "modelos.id as modelo_id",
            "modelos.imagem_card",
        )
        ->orderBy('marcas.nome_marca')
        ->get();

        foreach($modelos as $ssd){   
            $ssd->disponibilidade = Produto::where('modelo_id', $ssd->modelo_id)->where('status', "Em estoque")->count();
        }
        $modelos = $modelos->sortByDesc('disponibilidade');

        // dd($modelos);


        return view('visitante.modelos', ['modelos' => $modelos]);
    }
}
