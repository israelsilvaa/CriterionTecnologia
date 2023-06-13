@extends('admin.layout.basico')

@section('titulo', 'Cadastrar Modelo')

@section('conteudo')
    <div class="container bg-secondary mt-5 rounded-5">
        <div class="row">
            <div class="col-6 offset-5">
                <img src="/images/logo_1.png" width="190px" height="70px" alt="" />
            </div>
        </div>
        <div class="row">
            <h2 class="text-center">Novo Modelo</h2>

            <div class="col-12">
                <h6 class="text-center">Informações do produto</h6>
                <table>
                    <thead>
                        <th> </th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Marca</td>
                            <td colspan="2">
                                <form action="{{ route('admin.cadastroMarca') }}" method="POST">
                                    @csrf
                                <input type="text" name="nome_marca" id="" placeholder="KingSpec-2">
                            </td>
                            <td>
                                <button class="btn btn-success" type="submit">cadastrar</button>
                                </form>
                            </td>
                        </tr>

                        <tr>
                            <td>Modelo</td>
                            <td><form action="{{ route('admin.cadastroModelo') }}" method="POST">
                                @csrf
                                <select name="marca_id" id="">
                                    <option value="0" selected>Selecione a Marca</option>
                                    @foreach ($listaMarca as $marca)
                                        <option value="1">{{ $marca->nome_marca }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <input type="text" name="nome_modelo" id="" placeholder="Novo modelo 2023">
                            </td>
                            <td>
                                <button class="btn btn-success" type="submit">cadastrar</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>Tipo</td>
                            <td>
                                <form action="{{ route('admin.cadastroTipo') }}" method="POST">
                                @csrf
                                <select name="modelo_id" id="">
                                    <option value="0" selected>selecione o modelo</option>
                                    @foreach ($listaModelo as $modelo)
                                        <option value="{{ $modelo->id }}">{{ $modelo->nome_modelo }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                    <input type="text" name="nome_tipo" id="" placeholder="ssd data m2">
                            </td>
                            <td><button class="btn btn-success" type="submit">cadastrar</button></form>
                            </td>
                        </tr>

                        <tr>
                            <td>Capacidade</td>
                            <td>
                                <form action="{{route('admin.cadastroCapacidade')}}" method="POST">
                                @csrf
                                <select name="modelo_id" id="">
                                    <option value="0" selected>selecione o modelo</option>
                                    @foreach ($listaModelo as $modelo)
                                        <option value="{{$modelo->id}}">{{ $modelo->nome_modelo }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <input type="text" name="capacidade" id="" placeholder="500gb">
                            </td>
                            <td>
                                <button class="btn btn-success" type="submit">cadastrar</button>
                                </form>
                            </td>
                        </tr>

                        <tr>
                            <td>Velocidade</td>
                            <td>
                                <form action="{{route('admin.cadastroVelocidade')}}" method="POST">
                                @csrf
                                <select name="modelo_id" id="">
                                    <option value="0" selected>selecione o modelo</option>
                                    @foreach ($listaModelo as $modelo)
                                        <option value="{{$modelo->id}}">{{ $modelo->nome_modelo }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <input type="text" name="leitura" id="" placeholder="550mbs"><br>
                                <input type="text" name="escrita" id="" placeholder="450mbs">
                            </td>
                            <td>
                                <button class="btn btn-success" type="submit">cadastrar</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>Aplicação</td>
                            <td>
                                <form action="{{route('admin.cadastroAplicacao')}}" method="POST">
                                @csrf
                                <select name="modelo_id" id="">
                                    <option value="0" selected>selecione o modelo</option>
                                    @foreach ($listaModelo as $modelo)
                                        <option value="{{$modelo->id}}">{{ $modelo->nome_modelo }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <input type="text" name="nome_aplicacao" id="" placeholder="PC, notebook, console...">
                            </td>
                            <td>
                                <button class="btn btn-success" type="submit">cadastrar</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row col-6 offset-3 mt-4">
            <footer class="text-danger text-center">
                <a href="{{ route('admin.painel') }}" class="link link-info text-dark"> Voltar</a>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
@endsection
