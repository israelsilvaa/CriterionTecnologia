@extends('admin.layout.basico')

@section('titulo', 'Painel')

@section('conteudo')
    <div class="container bg-secondary mt-5 rounded-4">
        {{-- <div class="row justify-content-center">
            <div class="col-auto ">
                <img src="{{ url('storage/app/public/modelos/logo_1.png') }}" width="190px" height="70px" alt="" />
            </div>
        </div> --}}
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1 class="text-center">Painel</h1>
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
    </div>

@endsection
