@extends('visitante.layout.basico')

@section('titulo', 'Modelos')

@section('conteudo')
    <div class="container bg-secondary mt-5 rounded-5">
        <div class="row justify-content-center">
            <div class="col-auto ">
                <img src="{{ asset('/images/logo_1.png') }}" width="190px" height="70px" alt="" />
            </div>
        </div>
        <div class="row">
            <h1 class="text-center">Modelos e especificações </h1>

            <div class="col mt-4">
                @isset($modelos)
                    @foreach ($modelos as $ssd)
                        <h4>{{$ssd->nome_produto}} </h4>
                        <div class="table-responsive">
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">Modelo</th>
                                        <th scope="col">Capacidade</th>
                                        <th scope="col">Tipo</th>
                                        <th scope="col">Leitura/escrita</th>
                                        <th scope="col">Aplicação</th>
                                        <th scope="col">Geração</th>
                                        <th scope="col">Preço</th>
                                        <th scope="col">Disponibilidade</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <tr>
                                        <td>{{$ssd->nome_modelo}}</td>
                                        <td>{{$ssd->capacidade}}</td>
                                        <td>{{$ssd->tipo}}</td>
                                        <td>{{$ssd->leitura}}-{{$ssd->escrita}}</td>
                                        <td>{{$ssd->aplicacao}}</td>
                                        <td>{{$ssd->geracao}}</td>
                                        <td>R${{$ssd->preco}}</td>
                                        <td>{{$ssd->disponibilidade}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @endforeach
                @endisset
            </div>
        </div>

        <div class="row col-6 offset-3 mt-4 ">
            <footer class="text-danger text-center">
                <a href="/" class="link link-secondary text-dark"> Voltar</a>
            </footer>
        </div>
    </div>
@endsection()
