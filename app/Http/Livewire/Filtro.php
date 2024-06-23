<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\{Modelo, Produto};
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class Filtro extends Component
{

    public $filtro;
    public $ordem = 'desc';
    public $modelos_lista = null;

    public function mount(Modelo $modelos_obj)
    {
        if (Auth::check()) {

            $userId = Auth::user()->id;
            $this->modelos_lista = DB::table("modelos")
                ->join("marcas", "modelos.marca_id", "=", "marcas.id")
                ->join("produtos", "produtos.modelo_id", "=", "produtos.id")
                ->join("tipos", "modelos.tipo_id", "=", "tipos.id")
                ->join("capacidades", "modelos.capacidade_id", "=", "capacidades.id")
                ->join("velocidades", "modelos.velocidade_id", "=", "velocidades.id")
                ->join("aplicacoes", "modelos.aplicacao_id", "=", "aplicacoes.id")
                ->join("geracoes", "modelos.geracao_id", "=", "geracoes.id")
                ->join("imagens", "modelos.id", "=", "imagens.modelo_id")
                ->leftJoin("user_favoritos", function ($join) use ($userId) {
                    $join->on("modelos.id", "=", "user_favoritos.modelo_id")
                        ->where("user_favoritos.user_id", "=", $userId);
                })
                ->select(
                    "modelos.nome_produto as produto",
                    "modelos.preco as preco",
                    "produtos.status as status",
                    "marcas.nome_marca as marca",
                    "modelos.nome_modelo as modelo",
                    "tipos.nome_tipo as tipo",
                    "capacidades.capacidade as capacidade",
                    "velocidades.leitura",
                    "velocidades.escrita",
                    "aplicacoes.nome_aplicacao as aplicacao",
                    "geracoes.geracao",
                    "modelos.id as modelo_id",
                    "imagens.imagem_card",
                    DB::raw('(SELECT COUNT(*) FROM produtos WHERE modelo_id = modelos.id AND status IN ("Em estoque")) AS disponibilidade'),
                    DB::raw('IF(user_favoritos.id IS NULL, 0, 1) as is_favorito')
                )
                ->orderByRaw('disponibilidade > 0 DESC')
                ->orderBy("preco", 'asc')
                ->get();
        } else {
            $this->modelos_lista = DB::table("modelos")
                ->join("marcas", "modelos.marca_id", "=", "marcas.id")
                ->join("produtos", "produtos.modelo_id", "=", "produtos.id")
                ->join("tipos", "modelos.tipo_id", "=", "tipos.id")
                ->join("capacidades", "modelos.capacidade_id", "=", "capacidades.id")
                ->join("velocidades", "modelos.velocidade_id", "=", "velocidades.id")
                ->join("aplicacoes", "modelos.aplicacao_id", "=", "aplicacoes.id")
                ->join("geracoes", "modelos.geracao_id", "=", "geracoes.id")
                ->join("imagens", "modelos.id", "=", "imagens.modelo_id")
                ->select(
                    "modelos.nome_produto as produto",
                    "modelos.preco as preco",
                    "produtos.status as status",
                    "marcas.nome_marca as marca",
                    "modelos.nome_modelo as modelo",
                    "tipos.nome_tipo as tipo",
                    "capacidades.capacidade as capacidade",
                    "velocidades.leitura",
                    "velocidades.escrita",
                    "aplicacoes.nome_aplicacao as aplicacao",
                    "geracoes.geracao",
                    "modelos.id as modelo_id",
                    "imagens.imagem_card",
                    DB::raw('(SELECT COUNT(*) FROM produtos WHERE modelo_id = modelos.id AND status IN ("Em estoque")) AS disponibilidade'),
                )
                ->orderByRaw('disponibilidade > 0 DESC')
                ->orderBy("preco", 'asc')
                ->get();

        }
        // $this->modelos_lista = $this->modelos_lista->sortBy('preco');
    }

    public function filtrarModelos()
    {
        if (Auth::check()) {

            $userId = Auth::user()->id;
            $this->modelos_lista = DB::table("modelos")
                ->join("marcas", "modelos.marca_id", "=", "marcas.id")
                ->join("produtos", "produtos.modelo_id", "=", "produtos.id")
                ->join("tipos", "modelos.tipo_id", "=", "tipos.id")
                ->join("capacidades", "modelos.capacidade_id", "=", "capacidades.id")
                ->join("velocidades", "modelos.velocidade_id", "=", "velocidades.id")
                ->join("aplicacoes", "modelos.aplicacao_id", "=", "aplicacoes.id")
                ->join("geracoes", "modelos.geracao_id", "=", "geracoes.id")
                ->join("imagens", "modelos.id", "=", "imagens.modelo_id")
                ->leftJoin("user_favoritos", function ($join) use ($userId) {
                    $join->on("modelos.id", "=", "user_favoritos.modelo_id")
                        ->where("user_favoritos.user_id", "=", $userId);
                })
                ->select(
                    "modelos.nome_produto as produto",
                    "modelos.preco as preco",
                    "produtos.status as status",
                    "marcas.nome_marca as marca",
                    "modelos.nome_modelo as modelo",
                    "tipos.nome_tipo as tipo",
                    "capacidades.capacidade as capacidade",
                    "velocidades.leitura",
                    "velocidades.escrita",
                    "aplicacoes.nome_aplicacao as aplicacao",
                    "geracoes.geracao",
                    "modelos.id as modelo_id",
                    "imagens.imagem_card",
                    DB::raw('(SELECT COUNT(*) FROM produtos WHERE modelo_id = modelos.id AND status IN ("Em estoque")) AS disponibilidade'),
                    DB::raw('IF(user_favoritos.id IS NULL, 0, 1) as is_favorito')
                )
                ->orderByRaw('disponibilidade > 0 DESC')
                ->orderBy("$this->filtro", 'asc')
                ->get();
        } else {
            $this->modelos_lista = DB::table("modelos")
                ->join("marcas", "modelos.marca_id", "=", "marcas.id")
                ->join("produtos", "produtos.modelo_id", "=", "produtos.id")
                ->join("tipos", "modelos.tipo_id", "=", "tipos.id")
                ->join("capacidades", "modelos.capacidade_id", "=", "capacidades.id")
                ->join("velocidades", "modelos.velocidade_id", "=", "velocidades.id")
                ->join("aplicacoes", "modelos.aplicacao_id", "=", "aplicacoes.id")
                ->join("geracoes", "modelos.geracao_id", "=", "geracoes.id")
                ->join("imagens", "modelos.id", "=", "imagens.modelo_id")
                ->select(
                    "modelos.nome_produto as produto",
                    "modelos.preco as preco",
                    "produtos.status as status",
                    "marcas.nome_marca as marca",
                    "modelos.nome_modelo as modelo",
                    "tipos.nome_tipo as tipo",
                    "capacidades.capacidade as capacidade",
                    "velocidades.leitura",
                    "velocidades.escrita",
                    "aplicacoes.nome_aplicacao as aplicacao",
                    "geracoes.geracao",
                    "modelos.id as modelo_id",
                    "imagens.imagem_card",
                    DB::raw('(SELECT COUNT(*) FROM produtos WHERE modelo_id = modelos.id AND status IN ("Em estoque")) AS disponibilidade')
                )
                ->orderByRaw('disponibilidade > 0 DESC')
                ->orderBy("$this->filtro", 'asc')
                ->get();
        }
    }

    public function render()
    {
        return view('livewire.filtro');
    }
}
