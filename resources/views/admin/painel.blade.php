@extends('admin.layout.basico')

@section('titulo', 'Painel')

@section('conteudo')
    <div class="container bg-secondary mt-5 rounded-4">
        <div class="row justify-content-center">
            <div class="col-auto ">
                <img src="{{ url('storage/app/public/modelos/logo_1.png') }}" width="190px" height="70px" alt="" />
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1 class="text-center">Painel</h1>
                <div class="row text-center">
                    <div class="col-md-4">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M248 0H208c-26.5 0-48 21.5-48 48V160c0 35.3 28.7 64 64 64H352c35.3 0 64-28.7 64-64V48c0-26.5-21.5-48-48-48H328V80c0 8.8-7.2 16-16 16H264c-8.8 0-16-7.2-16-16V0zM64 256c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H224c35.3 0 64-28.7 64-64V320c0-35.3-28.7-64-64-64H184v80c0 8.8-7.2 16-16 16H120c-8.8 0-16-7.2-16-16V256H64zM352 512H512c35.3 0 64-28.7 64-64V320c0-35.3-28.7-64-64-64H472v80c0 8.8-7.2 16-16 16H408c-8.8 0-16-7.2-16-16V256H352c-15 0-28.8 5.1-39.7 13.8c4.9 10.4 7.7 22 7.7 34.2V464c0 12.2-2.8 23.8-7.7 34.2C323.2 506.9 337 512 352 512z" />
                        </svg>
                        <a href="{{ route('admin.cadastroEspecificacoes') }}" class="link link-dark ">Cadastrar
                            Especificações</a>
                    </div>
                    <div class="col-md-4">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M248 0H208c-26.5 0-48 21.5-48 48V160c0 35.3 28.7 64 64 64H352c35.3 0 64-28.7 64-64V48c0-26.5-21.5-48-48-48H328V80c0 8.8-7.2 16-16 16H264c-8.8 0-16-7.2-16-16V0zM64 256c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H224c35.3 0 64-28.7 64-64V320c0-35.3-28.7-64-64-64H184v80c0 8.8-7.2 16-16 16H120c-8.8 0-16-7.2-16-16V256H64zM352 512H512c35.3 0 64-28.7 64-64V320c0-35.3-28.7-64-64-64H472v80c0 8.8-7.2 16-16 16H408c-8.8 0-16-7.2-16-16V256H352c-15 0-28.8 5.1-39.7 13.8c4.9 10.4 7.7 22 7.7 34.2V464c0 12.2-2.8 23.8-7.7 34.2C323.2 506.9 337 512 352 512z" />
                        </svg>
                        <a href="{{ route('admin.cadastroProduto') }}" class="link link-dark ">Cadastrar Produto</a>
                    </div>

                    <div class="col-md-4">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                        </svg>
                        <a href="{{ route('admin.cadastroVenda') }}" class="link link-dark">Cadastrar venda</a>
                    </div>
                </div>

                <h4>Produtos</h4>
                <div class="table-responsive">
                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Marca</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Modelo</th>
                                <th scope="col">Capacidade</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">N/S</th>
                                <th scope="col">Aplicação</th>
                                <th scope="col">Geração</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @if (isset($listaProdutos))
                                @foreach ($listaProdutos as $produto)
                                    <tr>
                                        <th>{{ $produto->marca }}</th>
                                        <th>{{ $produto->nome }}</th>
                                        <td>{{ $produto->modelo }}</td>
                                        <td>{{ $produto->capacidade }}</td>
                                        <td>{{ $produto->tipo }}</td>
                                        <td>{{ $produto->numero_serie }}</td>
                                        <td>{{ $produto->aplicacao }}</td>
                                        <td>{{ $produto->geracao }}</td>
                                        <td>{{ $produto->status }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>

                    <h4>Ultimas Vendas</h4>
                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Cliente</th>
                                <th scope="col">N/S</th>
                                <th scope="col">valor</th>
                                <th scope="col">lucro</th>
                                <th scope="col">compra</th>
                                <th scope="col">Vencimento</th>
                                <th scope="col">Resumo</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @if (isset($listaVendas))
                                @foreach ($listaVendas as $venda)
                                    <tr>
                                        <th>{{ $venda->cliente }}</th>
                                        <td>{{ $venda->numero_serie }}</td>
                                        <td>{{ $venda->preco_venda }}</td>
                                        <td>{{ $venda->lucro }}</td>
                                        <td>{{ $venda->data_venda }}</td>
                                        <td>{{ $venda->data_garantia }}</td>
                                        <td>{{ $venda->observacao }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="row col-6 offset-3 mt-4 ">
            <footer class="text-danger text-center">
                <a href="/" class="link link-info text-dark"> Sair</a>
            </footer>
        </div>
    </div>

@endsection
