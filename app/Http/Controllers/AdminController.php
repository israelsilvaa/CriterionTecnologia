<?php

namespace App\Http\Controllers;

use App\Models\Aplicacoes;
use App\Models\Capacidade;
use App\Models\Importacao;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Produto;
use App\Models\produto_detalhe;
use App\Models\Tipo;
use App\Models\Velocidade;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewPainel(){

        $listaProdutos = Produto::all();
        $listaDetalhes = produto_detalhe::all();

        foreach ($listaProdutos as $produto){
            foreach($listaDetalhes as $detalhe){

                $marca = Marca::where('id', '=', $detalhe->marca_id)->get()->pluck('nome_marca')->first();
                $produto->marca_id = $marca;

                $modelo = Modelo::where('id', '=', $detalhe->modelo_id)->get()->pluck('nome_modelo')->first();
                $produto->modelo_id = $modelo;
                
                $capacidade = Capacidade::where('id', '=', $detalhe->capacidade_id)->get()->pluck('tamanho')->first();
                $produto->capacidade_id = $capacidade;
                
                $tipo = Tipo::where('id', '=', $detalhe->tipo_id)->get()->pluck('nome_tipo')->first();
                $produto->tipo_id = $tipo;

                $aplicacao = Aplicacoes::where('id', '=', $detalhe->aplicacao_id)->get()->pluck('nome_aplicacao')->first();
                $produto->aplicacao_id = $aplicacao;
            }

        }


        return view('admin.painel',  ['listaProdutos' => $listaProdutos, 'listaDetalhes'=> $listaDetalhes]);
    }

    public function viewCadastroProduto(){

        $listaMarca = Marca::all();
        $listaModelos = Modelo::all();
        $listaCapacidades = Capacidade::all();
        $listaVelocidade = Velocidade::all();
        $listaTipos = Tipo::all();
        $listaAplicacoes = Aplicacoes::all();

        return view('admin.cadastroProduto', ['listaMarca' => $listaMarca, 'listaModelos'=> $listaModelos, 'listaCapacidades'=> $listaCapacidades, 'listaTipos'=> $listaTipos, 'listaAplicacoes'=> $listaAplicacoes, 'listaVelocidade'=>$listaVelocidade]);
    }

    public function viewCadastroVenda(){
        return view('admin.cadastroVenda');
    }

    public function store(Request $request){
        $produto = new Produto();
        $produto->numero_serie = $request->numero_serie;
        $produto->save();

        $id_produto = Produto::where('numero_serie', '=', $request->numero_serie)
            ->get()
            ->pluck('id')
            ->first();
        $importacao = new Importacao();
        $importacao->produto_id = $id_produto;
        $importacao->preco_importacao = $request->preco_importacao;
        $importacao->data_pedido = $request->data_pedido;
        $importacao->data_chegada = $request->data_chegada;
        $importacao->save();

        $produto_detalhe = new produto_detalhe();
        $produto_detalhe->produto_id = $id_produto;
        $produto_detalhe->marca_id = $request->nome_marca;
        $produto_detalhe->modelo_id = $request->nome_modelo;
        $produto_detalhe->tipo_id = $request->nome_tipo;
        $produto_detalhe->capacidade_id = $request->tamanho;
        $produto_detalhe->velocidade_id = $request->velocidade;
        $produto_detalhe->aplicacao_id = $request->nome_aplicacao;
        $produto_detalhe->save();

        $teste = produto_detalhe::all();
        echo '<pre>';
        print_r($teste);
        echo '</pre>';   

        return view('admin.cadastroVenda');
    }

}
