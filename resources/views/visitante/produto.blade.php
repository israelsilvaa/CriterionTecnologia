@extends('layout.basico')

@section('titulo', 'Detalhes do produto')

@section('conteudo')


    <main class="flex-fill">
        <div class="container">
            <div class="row g-3">
                <div class="col-12 col-sm-6">
                    <img src="{{ url("storage/{$modelo->imagem_card}") }}" class="img-thumbnail mt-2 bg-dark" id="imgProduto">
                    {{-- <img src="{{ url("storage/modelos/400x200.png") }}" class="img-thumbnail mt-2" id="imgProduto"> --}}
                    <br class="clearfix">
                    <div class="row my-3 gx-3">
                        <div class="col-2">
                            <img src="{{ url("storage/{$modelo->imagem_card}") }}" class="img-thumbnail"
                                onclick="trocarImagem(this)">
                        </div>
                        @if ($modelo->imagem_1 != 'null')
                            <div class="col-2">
                                <img src="{{ url("storage/{$modelo->imagem_1}") }}" class="img-thumbnail"
                                    onclick="trocarImagem(this)">
                            </div>
                        @endif
                        @if ($modelo->imagem_2 != 'null')
                            <div class="col-2">
                                <img src="{{ url("storage/{$modelo->imagem_2}") }}" class="img-thumbnail"
                                    onclick="trocarImagem(this)">
                            </div>
                        @endif
                        @if ($modelo->imagem_3 != 'null')
                            <div class="col-2">
                                <img src="{{ url("storage/{$modelo->imagem_3}") }}" class="img-thumbnail"
                                    onclick="trocarImagem(this)">
                            </div>
                        @endif

                        @if ($modelo->imagem_4 != 'null')
                            <div class="col-2">
                                <img src="{{ url("storage/{$modelo->imagem_4}") }}" class="img-thumbnail"
                                    onclick="trocarImagem(this)">
                            </div>
                        @endif

                    </div>
                </div>
                <div class="col-12 col-sm-6 text-white">
                    <h1>{{ $modelo->produto }}</h1>
                    <div class="row">

                        <div class="col-sm-12 col-md-8  ">
                            <small>Marca: {{ $modelo->marca }}</small>
                        </div>
                        <div class="col-sm-12 col-md-8  ">
                            <small>modelo: {{ $modelo->modelo }}</small>
                        </div>
                        <div class="col-sm-12 col-md-8  ">
                            <small>Interface: {{ $modelo->tipo }}</small>
                        </div>
                        <div class="col-sm-12 col-md-8  ">
                            <small>Capacidade: {{ $modelo->capacidade }}</small>
                        </div>
                        <div class="col-sm-12 col-md-8 ">
                            <small>Leitura: {{ $modelo->leitura }} <br>
                                Escrita: {{ $modelo->escrita }}</small>
                        </div>
                        <div class="col-sm-12 col-md-8 ">
                            <small>Geração: {{ $modelo->geracao }}</small>
                        </div>
                        <div class="col-sm-12 col-md-8 ">
                            <small>Aplicação: {{ $modelo->aplicacao }}</small>
                        </div>
                        <div class="col-sm-12 col-md-8 ">
                            <small>dimensões:
                                {{ $modelo->altura }}{{ $modelo->unidade_medida }} x
                                {{ $modelo->largura }}{{ $modelo->unidade_medida }} x
                                {{ $modelo->profundidade }}{{ $modelo->unidade_medida }}
                            </small>
                        </div>
                    </div>

                    @if ($disponibilidade)
                        <h5 class="text-success text-center mt-2">R$ {{ $modelo->preco }} à vista no Pix</h5>
                        {{-- <p class=" text-center">ou 4x de R${{$modelo->preco / 4}} sem juros no cartão de crédito</p> --}}
                        <p class="text-center mt-2">
                            {{-- <a href="https://contate.me/criteriontecnologia" --}}
                            <a href="https://wa.me/55091980175325?text=olá, o {{ $modelo->produto }} ainda está dipsonivel?"
                                class="btn btn-lg btn-success mb-3 mb-xl-0 me-2 ">
                                <i class="bi-whatsapp"></i> Solicitar via whatsapp
                            </a>
                            {{-- <button class="btn btn-lg btn-outline-danger">
                                    <i class="bi-heart"></i> Adicionar aos Favoritos
                                </button> --}}
                        </p>
                    @else
                        <h5 class="text-secondary text-center mt-2">R$ {{ $modelo->preco }} à vista no Pix</h5>
                        {{-- <p class=" text-center">ou 4x de R${{$modelo->preco / 4}} sem juros no cartão de crédito</p> --}}
                        <p class="text-center mt-2">
                            <a href="#" class="btn btn-lg btn-warning disabled mb-3 mb-xl-0 me-2">
                                <i class="fa-solid fa-triangle-exclamation"></i>
                                Reabastecendo estoque.
                            </a>
                        </p>
                    @endif
                </div>
            </div>
            <script>
                function trocarImagem(el) {
                    var imgProduto = document.getElementById("imgProduto");
                    imgProduto.src = el.src;
                }
            </script>
        </div>
    </main>

@endsection
