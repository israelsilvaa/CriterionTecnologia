@extends('layout.basico')

@section('titulo', 'Garantia')

@section('conteudo')
    <div class="container bg-secondary mt-5 rounded-5">
        <div class="row justify-content-center">
            <div class="col-auto ">
                <img src="{{ asset('/images/logo_1.png') }}" width="190px" height="70px" alt="" />
            </div>
        </div>
        <div class="row">
            <div class="col-md mt-2">
                <h1 class="text-center">Garantia</h1>
                <form action="{{ route('visitante.verificarGarantia') }}" method="post" class="text-center">
                    @csrf
                    <label for="">Número de série:</label>
                    <input type="text" name="numero_serie" value="{{ old('numero_serie') }}" id=""
                        placeholder="">

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
                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Cliente</th>
                                <th scope="col">Produto</th>
                                <th scope="col">Valor</th>
                                <th scope="col">Compra</th>
                                <th scope="col">Vencimento</th>
                                <th scope="col">Observação</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @if (isset($venda))
                                @php
                                    $dataGarantia = \Carbon\Carbon::parse($venda->data_garantia);
                                    $dataAtual = \Carbon\Carbon::now();
                                @endphp
                                <tr>
                                    <td>{{ $venda->cliente }}</td>
                                    <td>{{ $produto->nome_produto }}</td>
                                    <td>{{ $venda->preco_venda }}</td>
                                    <td>{{ \Carbon\Carbon::parse($venda->data_venda)->format('d/m/Y') }}</td>
                                    @if ($dataGarantia->isBefore($dataAtual))
                                        <td class="text-danger">
                                            {{ \Carbon\Carbon::parse($venda->data_garantia)->format('d/m/Y') }}-Fora da
                                            garantia</td>
                                    @else
                                        <td class="text-success">
                                            {{ \Carbon\Carbon::parse($venda->data_garantia)->format('d/m/Y') }}-Está na
                                            garantia</td>
                                    @endif
                                    <td>{{ $venda->observacao }}</td>
                                </tr>
                            @else
                                <tr>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>--</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Marca</th>
                                <th scope="col">Modelo</th>
                                <th scope="col">N/S</th>
                                <th scope="col">Capacidade</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Leitu/Escri</th>
                                <th scope="col">Aplicação</th>
                                <th scope="col">Geração</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @if (isset($produto))
                                <tr>
                                    <td>{{ $produto->marca }}</td>
                                    <td>{{ $produto->modelo }}</td>
                                    <td>{{ $produto->numero_serie }}</td>
                                    <td>{{ $produto->capacidade }}</td>
                                    <td>{{ $produto->tipo }}</td>
                                    <td>{{ $produto->leitura }}-{{ $produto->escrita }}</td>
                                    <td>{{ $produto->aplicacao }}</td>
                                    <td>{{ $produto->geracao }}</td>
                                </tr>
                            @else
                                <tr>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>--</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>

                <div class="row border border-dark">
                    <div class="col-md-6">
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

                    <div class="col-md-6">
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
        </div>


        <div class="row col-6 offset-3 mt-4 ">
            <footer class="text-danger text-center">
                <a href="/" class="link link-info text-dark"> Voltar</a>
            </footer>
        </div>
        @include('visitante.layout._partials.footerContato')
    </div>
@endsection
