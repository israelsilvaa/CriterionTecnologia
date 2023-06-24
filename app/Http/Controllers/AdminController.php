<?php

namespace App\Http\Controllers;

use App\Models\Velocidade;
use App\Models\Aplicacoes;
use App\Models\Capacidade;
use App\Models\Dimensoes;
use App\Models\Geracao;
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
  
        if($listaProdutos != Null){
            foreach($listaProdutos as $ssd){   
                $modelo = Modelo::where('id', '=', $ssd->modelo_id)->get()->first();

                $ssd->marca = Marca::where('id', '=', $ssd->marca_id)->get()->pluck('nome_marca')->first();
                $ssd->nome = Modelo::where('id', '=', $ssd->modelo_id)->get()->pluck('nome_produto')->first();
                $ssd->modelo = Modelo::where('id', '=', $ssd->modelo_id)->get()->pluck('nome_modelo')->first();
                $ssd->capacidade = Capacidade::where('id', '=', $modelo->capacidade_id)->get()->pluck('capacidade')->first();
                $ssd->tipo = Tipo::where('id', '=', $modelo->tipo_id)->get()->pluck('nome_tipo')->first();
                $ssd->aplicacao = Aplicacoes::where('id', '=', $modelo->aplicacao_id)->get()->pluck('nome_aplicacao')->first();
                $ssd->leitura = Velocidade::where('id', '=', $ssd->velocidade_id)->get()->pluck('leitura')->first();
                $ssd->escrita = Velocidade::where('id', '=', $ssd->velocidade_id)->get()->pluck('escrita')->first();
                $ssd->geracao = Geracao::where('id', '=', $modelo->geracao_id)->get()->pluck('geracao')->first();
                
                $disponibilidade = Produto::where('modelo_id', $ssd->id)->where('status', "Em estoque")->count();
                $ssd->disponibilidade = $disponibilidade; 
            }
            $listaVendas = Venda::all();
            foreach ($listaVendas as $venda){
                $numero_serie = Produto::where('id', '=', $venda->produto_id)->get()->pluck('numero_serie')->first();
                $venda->numero_serie = $numero_serie;
            }
            return view('admin.painel',['listaProdutos'=>$listaProdutos, 'listaVendas'=>$listaVendas]);

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
        $produto->numero_serie = $request->numero_serie;
        $produto->marca_id = $request->nome_marca;
        $produto->modelo_id = $request->nome_modelo;
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
        $importacao->lote = $request->lote;
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
        
        $preco_importacao = Importacao::where('produto_id', '=', $id_produto)
        ->get()
        ->pluck('preco_importacao')
        ->first();

        $venda->lucro = $request->preco_venda - $preco_importacao;
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
        $listaTipo = Tipo::all();
        $listaCapacidade = Capacidade::all();
        $listaVelocidade = Velocidade::all();
        $listaAplicacao = Aplicacoes::all();
        $listaGeracao = Geracao::all();
        $listaDimensoes = Dimensoes::all();
        
        return view('admin.cadastroEspecificacoes', ['listaMarca' => $listaMarca,
            'listaModelo' => $listaModelo,
            'listaTipo' => $listaTipo,
            'listaCapacidade' => $listaCapacidade,
            'listaVelocidade' => $listaVelocidade,
            'listaAplicacao' => $listaAplicacao,
            'listaDimensoes' => $listaDimensoes,
            'listaGeracao' => $listaGeracao]);
    }
    
    public function cadastroMarca(Request $request){
        $marca = new Marca();
        $marca->nome_marca = $request->nome_marca;
        $marca->save();
        return redirect()->route('admin.cadastroEspecificacoes');
    }
    public function cadastroModelo(Request $request){
        $novoModelo = new Modelo();
        $novoModelo->nome_modelo =$request->nome_modelo;
        $novoModelo->nome_produto =$request->nome_produto;
        $novoModelo->marca_id =$request->marca_id;
        $novoModelo->tipo_id =$request->tipo_id;
        $novoModelo->capacidade_id =$request->capacidade_id;
        $novoModelo->velocidade_id =$request->velocidade_id;
        $novoModelo->aplicacao_id =$request->aplicacao_id;
        $novoModelo->geracao_id =$request->geracao_id;
        $novoModelo->preco = $request->preco;
        $novoModelo->dimensoes_id =$request->dimensoes_id;

        $novoModelo->imagem_card = $request->imagem_card->store('modelos');
        
        $novoModelo->save();
        return redirect()->route('admin.cadastroEspecificacoes');
    }

    public function cadastroTipo(Request $request){
        $novoTipo = new Tipo();
        $novoTipo->nome_tipo =$request->nome_tipo;
        $novoTipo->save();
        return redirect()->route('admin.cadastroEspecificacoes');
    }
    public function cadastroCapacidade(Request $request){
        $capacidade = new Capacidade();
        $capacidade->capacidade = $request->capacidade;
        $capacidade->save();
        return redirect()->route('admin.cadastroEspecificacoes');
    }
    public function cadastroVelocidade(Request $request){
        $velocidade = new Velocidade();
        $velocidade->leitura = $request->leitura;
        $velocidade->escrita = $request->escrita;
        $velocidade->save();
        return redirect()->route('admin.cadastroEspecificacoes');
    }
    public function cadastroAplicacao(Request $request){
        $aplicacao = new Aplicacoes();
        $aplicacao->nome_aplicacao =$request->nome_aplicacao;
        $aplicacao->save();
        return redirect()->route('admin.cadastroEspecificacoes');
    }
    public function cadastroGeracao(Request $request){
        $geracao = new Geracao();
        $geracao->geracao =$request->geracao;
        $geracao->save();
        return redirect()->route('admin.cadastroEspecificacoes');
    }
    public function cadastroDimensoes(Request $request){
        $dimensoes = $request->all();
        $dimensoes = Dimensoes::create($dimensoes);
        return redirect()->route('admin.cadastroEspecificacoes');
    }
}
