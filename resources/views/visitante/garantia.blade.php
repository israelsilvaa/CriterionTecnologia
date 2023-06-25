@extends('layout.basico')

@section('titulo', 'Garantia')

@section('conteudo')

    <main class="flex-fill">
        <div class="container">
            <div class="row g-3 ">
                <h1 class="text-center text-white">Garantia</h1>
                <hr class="text-white">
                <form action="{{ route('visitante.verificarGarantia') }}" method="post" class="text-center text-white ">
                    @csrf
                    <label for="">Número de série:</label>
                    <input type="text" name="numero_serie" value="{{ old('numero_serie') }}" id=""
                        placeholder="NV3000500GB">

                    <button type="submit" class="btn btn-success">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button><br>
                    @if ($errors->all())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif
                </form>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <div class="col-sm-12 col-md-4 mt-4">
                    @if (isset($venda))
                        <img src="{{ url("storage/{$produto->imagem_card}") }}" class="img-thumbnail bg-dark" id="imgProduto">
                    @else
                        <img src="{{ url("storage/modelos/jDII4Q6znFXoQFqBwQAnKoJ01dBLue1emIAqvnmg.png") }}" class="img-thumbnail bg-dark" id="imgProduto">
                    @endif
                    <br class="clearfix">
                    {{-- <div class="row my-3 gx-2">
                        <div class="col">
                            <img src="{{ asset('/images/01.jpg') }}" class="img-thumbnail" onclick="trocarImagem(this)">
                        </div>
                        <div class="col">
                            <img src="{{ asset('/images/02.jpg') }}" class="img-thumbnail" onclick="trocarImagem(this)">
                        </div>
                        <div class="col">
                            <img src="{{ asset('/images/03.jpg') }}" class="img-thumbnail" onclick="trocarImagem(this)">
                        </div>
                        <div class="col">
                            <img src="{{ asset('/images/01.jpg') }}" class="img-thumbnail" onclick="trocarImagem(this)">
                        </div>
                    </div> --}}
                </div>

                <div class="col-sm-12 col-md-4 text-white mt-4">
                    <h1>Detalhes do produto</h1>
                    @if (isset($venda))
                        <div class="row text-white">
                            <div class="col-sm-12 col-md-8  ">
                                <small>Marca: {{ $produto->marca }}</small>
                            </div>
                            <div class="col-sm-12 col-md-8  ">
                                <small>modelo: {{ $produto->modelo }}</small>
                            </div>
                            <div class="col-sm-12 col-md-8  ">
                                <small>N/S: {{ $produto->numero_serie }}</small>
                            </div>
                            <div class="col-sm-12 col-md-8  ">
                                <small>Interface: {{ $produto->tipo }}</small>
                            </div>
                            <div class="col-sm-12 col-md-8  ">
                                <small>Capacidade: {{ $produto->capacidade }}</small>
                            </div>
                            <div class="col-sm-12 col-md-8  ">
                                <small>Performance de referência: até {{ $produto->leitura }} para leitura e
                                    {{ $produto->escrita }} para gravação</small>
                            </div>
                            <div class="col-sm-12 col-md-8  ">
                                <small>Geração: {{ $produto->geracao }}</small>
                            </div>
                            <div class="col-sm-12 col-md-8  ">
                                <small>Aplicação: {{ $produto->aplicacao }}</small>
                            </div>
                            <div class="col-sm-12 col-md-8  ">
                                <small>dimensões: 100,0 mm x 69,9 mm x 7,0 mm</small>
                            </div>
                        </div>
                    @else
                        <div class="row text-white">
                            <div class="col-sm-12 col-md-8  ">
                                <small>Marca: -</small>
                            </div>
                            <div class="col-sm-12 col-md-8  ">
                                <small>modelo: -</small>
                            </div>
                            <div class="col-sm-12 col-md-8  ">
                                <small>N/S: -</small>
                            </div>
                            <div class="col-sm-12 col-md-8  ">
                                <small>Interface: -</small>
                            </div>
                            <div class="col-sm-12 col-md-8  ">
                                <small>Capacidade: -</small>
                            </div>
                            <div class="col-sm-12 col-md-8  ">
                                <small>Performance de referência: -</small>
                            </div>
                            <div class="col-sm-12 col-md-8  ">
                                <small>Geração:-</small>
                            </div>
                            <div class="col-sm-12 col-md-8  ">
                                <small>Aplicação:-</small>
                            </div>
                            <div class="col-sm-12 col-md-8  ">
                                <small>dimensões:-</small>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-sm-12 col-md-4 text-white mt-4 text-white">
                    <h1>Detalhes da venda</h1>
                    @if (isset($venda))
                        @php
                            $dataGarantia = \Carbon\Carbon::parse($venda->data_garantia);
                            $dataAtual = \Carbon\Carbon::now();
                        @endphp
                        <div class="row text-white">
                            <div class="col-sm-12 col-md-8  ">
                                <small>Cliente: {{ $venda->cliente }}</small>
                            </div>
                            <div class="col-sm-12 col-md-8  ">
                                <small>N/S do produto: {{ $venda->numero_serie }}</small>
                            </div>
                            <div class="col-sm-12 col-md-8 ">
                                <small>Valor: R${{ $venda->preco_venda }}</small>
                            </div>
                            <div class="col-sm-12 col-md-8  ">
                                <small>Data da compra:
                                    {{ \Carbon\Carbon::parse($venda->data_venda)->format('d/m/Y') }}</small>
                            </div>
                            @if ($dataGarantia->isBefore($dataAtual))
                                <div class="col-sm-12 col-md-8">
                                    <small>Data da garantia:
                                        <small class="text-danger">
                                            {{ \Carbon\Carbon::parse($venda->data_garantia)->format('d/m/Y') }}
                                        </small>
                                    </small>
                                </div>
                                <div class="col-sm-12 col-md-8  ">
                                    <small>Status:
                                        <small class="text-danger">Fora da garantia</small>
                                        <i class="fa-solid fa-exclamation" style="color: #db0000;"></i>
                                    </small>
                                </div>
                            @else
                                <div class="col-sm-12 col-md-8  ">
                                    <small>Data da garantia:
                                        <small class="text-success">
                                            {{ \Carbon\Carbon::parse($venda->data_garantia)->format('d/m/Y') }}
                                        </small>
                                    </small>
                                </div>
                                <div class="col-sm-12 col-md-8  ">
                                    <small>Status:
                                        <small class="text-success">Dentro da garantia</small>
                                        <i class="fa-solid fa-check" style="color: #0aae25;"></i>
                                    </small>
                                </div>
                            @endif
                            <div class="col-sm-12 col-md-8  ">
                                <small>Obsevações: {{ $venda->observacao }}</small>
                            </div>
                        </div>
                    @else
                        <div class="row text-white">
                            <div class="col-sm-12 col-md-8  ">
                                <small>Cliente: ----</small>
                            </div>
                            <div class="col-sm-12 col-md-8 ">
                                <small>Valor: ----</small>
                            </div>
                            <div class="col-sm-12 col-md-8  ">
                                <small>Data da compra: ----</small>
                            </div>
                            <div class="col-sm-12 col-md-8  ">
                                <small>Data da garantia: ----</small>
                            </div>
                            <div class="col-sm-12 col-md-8  ">
                                <small>N/S do produto: ----</small>
                            </div>
                            <div class="col-sm-12 col-md-8  ">
                                <small>Obsevações: ----</small>
                            </div>
                            <div class="col-sm-12 col-md-8  ">
                                <small>Status: ----</small>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <hr class="text-white">
            <div class="row">
                <div class="col-sm-12 col-md-6 text-white mt-4">
                    <p>
                        O que a garantia da loja cobre? <br>
                    <ol>
                        <li>SSD MUITO lento, incompatível com as velocidades referência.</li>
                        <li>SSD em formato RAW.</li>
                        <li>só liga o led, mas não inicia.</li>
                        <li>Não gostei da cor</li>
                    </ol>
                    </p>
                </div>
                <div class="col-sm-12 col-md-6 text-white mt-4">
                    <p>
                        O que NÃO cobre? <br>
                    <ol>
                        <li>máquina não suporta entrada do SSD (m.2, Sata).</li>
                        <li>me arrependi da compra.</li>
                        <li>quero um tamanho maior. </li>
                    </ol>
                    </p>
                </div>
            </div>

        </div>
        {{-- <script>
            function trocarImagem(el) {
                var imgProduto = document.getElementById("imgProduto");
                imgProduto.src = el.src;
            }
        </script> --}}
    </main>



@endsection
