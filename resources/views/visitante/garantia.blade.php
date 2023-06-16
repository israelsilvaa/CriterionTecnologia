@extends('visitante.layout.basico')

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
                    <input type="text" name="numero_serie" id="" placeholder="">

                    <a href="index.html" class="btn btn-success">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                        </svg>
                    </a>
                </form>
                <p class="text-white text-justify">
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
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @if (isset($produto))
                                <tr>
                                    <td>{{ $produto->marca_id }}</td>
                                    <td>{{ $produto->modelo_id }}</td>
                                    <td>{{ $produto->numero_serie }}</td>
                                    <td>{{ $produto->capacidade_id }}</td>
                                    <td>{{ $produto->tipo_id }}</td>
                                    <td>{{ $produto->leitura }}-{{ $produto->escrita }}</td>
                                    <td>{{ $produto->aplicacao_id }}</td>
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
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
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
                                            {{ \Carbon\Carbon::parse($venda->data_garantia)->format('d/m/Y') }} - Fora da
                                            garantia</td>
                                    @else
                                        <td class="text-success">
                                            {{ \Carbon\Carbon::parse($venda->data_garantia)->format('d/m/Y') }} - Está na
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
                </p>

                <div class="row border border-dark">
                    <div class="col-md-6">
                        <p>
                            O que a garantia da loja cobre? <br>
                        <ol>
                            <li>SSD lento</li>
                            <li>SSD formato RAW</li>
                            <li>...</li>
                        </ol>
                        </p>
                    </div>

                    <div class="col-md-6">
                        <p>
                            O que NÃO cobre? <br>
                        <ol>
                            <li>incompativel com a maquina</li>
                            <li>Quero uma capacidade maior</li>
                            <li>...</li>
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
