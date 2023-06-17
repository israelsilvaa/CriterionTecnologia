<?php

namespace App\Http\Controllers;

use App\Models\Velocidade;
use App\Models\Aplicacoes;
use App\Models\Capacidade;
use App\Models\Importacao;
use App\Models\Produto;
use App\Models\Modelo;
use App\Models\Venda;
use App\Models\Marca;
use App\Models\Tipo;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewPainel(){

        $listaProdutos = Produto::all();
  
        if ($listaProdutos){
            
            foreach ($listaProdutos as $produto){
                
                $marca = Marca::where('id', '=', $produto->marca_id)->get()->pluck('nome_marca')->first();
                $produto->marca_id = $marca;
                
                $modelo = Modelo::where('id', '=', $produto->modelo_id)->get()->pluck('nome_modelo')->first();
                $produto->modelo_id = $modelo;
                
                $capacidade = Capacidade::where('id', '=', $produto->capacidade_id)->get()->pluck('capacidade')->first();
                $produto->capacidade_id = $capacidade;
                // dd($produto);
                
                $tipo = Tipo::where('id', '=', $produto->tipo_id)->get()->pluck('nome_tipo')->first();
                $produto->tipo_id = $tipo;
                
                $aplicacao = Aplicacoes::where('id', '=', $produto->aplicacao_id)->get()->pluck('nome_aplicacao')->first();
                $produto->aplicacao_id = $aplicacao;
            }

            $listaVendas = Venda::all();
            foreach ($listaVendas as $venda){
                $numero_serie = Produto::where('id', '=', $venda->produto_id)->get()->pluck('numero_serie')->first();
                $venda->numero_serie = $numero_serie;
            }
            return view('admin.painel',  ['listaProdutos' => $listaProdutos, 'listaVendas'=> $listaVendas]);
        }else{
            return view('admin.painel');
        }

    }

    public function viewCadastroProduto(){

        $listaMarca = Marca::all();
        $listaModelos = Modelo::all();
        $listaCapacidades = Capacidade::all();
        $listaVelocidade = Velocidade::all();
        $listaTipos = Tipo::all();
        $listaAplicacoes = Aplicacoes::all();

        return view('admin.cadastroProduto', ['listaMarca' => $listaMarca]);
    }

    public function viewCadastroVenda(){
        return view('admin.cadastroVenda');
    }
    
    public function store(Request $request){
        $produto = new Produto();
        
        $produto = new Produto();
        $produto->nome_produto = $request->nome_produto;
        $produto->numero_serie = $request->numero_serie;
        $produto->marca_id = $request->nome_marca;
        $produto->modelo_id = $request->nome_modelo;
        $produto->tipo_id = $request->nome_tipo;
        $produto->capacidade_id = $request->capacidade;
        $produto->velocidade_id = $request->velocidade;
        $produto->aplicacao_id = $request->nome_aplicacao;
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
        
        return redirect()->route('admin.cadastroProduto');
    }
    
    public function storeVenda(Request $request){
        
        $id_produto = Produto::where('numero_serie', '=', $request->numero_serie)
        ->get()
        ->pluck('id')
        ->first();
        
        $venda = new Venda();
        $venda->produto_id = $id_produto;
        $venda->cliente = $request->cliente;
        $venda->data_venda = $request->data_venda;
        
        $data_garantia = now('America/Belem')
                        ->create($request->data_venda)
                        ->addMonth();
        
        $venda->data_garantia = $data_garantia;
        $venda->preco_venda = $request->preco_venda;
        $venda->observacao = $request->observacao;
        $venda->save();  

        $produto = Produto::find($id_produto);
        $produto->status = "vendido";
        $produto->save();
        
        return view('admin.cadastroVenda');
    }
    
    // cadastro de Marca, modelos, tipos, etc
    public function viewCadastroEspecificacoes(){
        
        $listaMarca = Marca::all();
        $listaModelo = Modelo::all();
        
        return view('admin.cadastroEspecificacoes', ['listaMarca' => $listaMarca, 'listaModelo' => $listaModelo]);
    }
    
    public function cadastroMarca(Request $request){
        $marca = new Marca();
        $marca->nome_marca = $request->nome_marca;
        $marca->save();
        return redirect()->route('admin.cadastroEspecificacoes');
    }
    public function cadastroModelo(Request $request){
        $novoModelo = new Modelo();
        $novoModelo->marca_id =$request->marca_id;
        $novoModelo->nome_modelo =$request->nome_modelo;

        $novoModelo->save();
        return redirect()->route('admin.cadastroEspecificacoes');
    }
    public function cadastroTipo(Request $request){
        $novoTipo = new Tipo();
        // dd($request);
        $novoTipo->modelo_id =$request->modelo_id;
        $novoTipo->nome_tipo =$request->nome_tipo;
        $novoTipo->save();
        return redirect()->route('admin.cadastroEspecificacoes');
    }
    public function cadastroCapacidade(Request $request){
        $capacidade = new Capacidade();
        // dd($capacidade);
        $capacidade->modelo_id = $request->modelo_id;
        $capacidade->capacidade = $request->capacidade;
        $capacidade->save();
        return redirect()->route('admin.cadastroEspecificacoes');
    }
    public function cadastroVelocidade(Request $request){
        $velocidade = new Velocidade();
        // dd($request);
        $velocidade->modelo_id = $request->modelo_id;
        $velocidade->leitura = $request->leitura;
        $velocidade->escrita = $request->escrita;
        $velocidade->save();
        return redirect()->route('admin.cadastroEspecificacoes');
    }
    public function cadastroAplicacao(Request $request){
        $aplicacao = new Aplicacoes();
        // dd($request);
        $aplicacao->modelo_id =$request->modelo_id;
        $aplicacao->nome_aplicacao =$request->nome_aplicacao;
        $aplicacao->save();
        return redirect()->route('admin.cadastroEspecificacoes');
    }

    public function selectMarca($marca_id){
        $listaModelos = Modelo::all();
   
        return view('admin.cadastroProduto', ['listaModelos'=> $listaModelos]);
    }
}
