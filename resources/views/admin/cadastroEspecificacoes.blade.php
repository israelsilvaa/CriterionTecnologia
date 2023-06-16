@extends('admin.layout.basico')

@section('titulo', 'Cadastrar Especificação')

@section('conteudo')
    <div class="container bg-secondary mt-5 rounded-5">
        <div class="row justify-content-center">
            <div class="col-auto ">
                <img src="{{ asset('/images/logo_1.png') }}" width="190px" height="70px" alt="" />
            </div>
        </div>

        <div class="row justify-content-center">
            <h2 class="text-center">Cadastro de Especificação</h2>
            <div class="col-md-10">
                <div class="row  justify-content-center">
                    <div class="col-md-8">
                        <form action="{{ route('admin.cadastroMarca') }}" method="post">
                            @csrf
                            <fieldset>
                                <legend>Marca</legend>
                                <div class="input-group mb-1">
                                    <span class="input-group-text" id="basic-addon1">Marca</span>
                                    <input type="text" class="form-control" name="nome_marca" placeholder="SSD sata..."
                                        aria-label="nome_marca" aria-describedby="basic-addon1">
                                    <button class="btn btn-success" type="submit">cadastrar</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>

                <div class="row  justify-content-center">
                    <div class="col-md-8">
                        <form action="{{ route('admin.cadastroModelo') }}" method="post">
                            @csrf
                            <fieldset>
                                <legend>Modelo</legend>
                                <div class="input-group mb-1">
                                    <select class="form-select form-select-sm" name="marca_id" id="">
                                        <option value="0" selected>Marcas</option>
                                        @foreach ($listaMarca as $marca)
                                            <option value="{{ $marca->id }}">{{ $marca->nome_marca }}</option>
                                        @endforeach
                                    </select><br />
                                    <input type="text" name="nome_modelo" id="" placeholder="Novo modelo 2023">
                                    <button class="btn btn-success" type="submit">cadastrar</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>

                <div class="row  justify-content-center">
                    <div class="col-md-8">
                        <form action="{{ route('admin.cadastroTipo') }}" method="post">
                            @csrf
                            <fieldset>
                                <legend>Tipo</legend>
                                <div class="input-group mb-1">
                                    <select class="form-select form-select-sm" name="modelo_id" id="">
                                        <option value="0" selected>Modelos</option>
                                        @foreach ($listaModelo as $modelos)
                                            <option value="{{ $modelos->id }}">{{ $modelos->nome_modelo }}</option>
                                        @endforeach
                                    </select><br />
                                    <input type="text" name="nome_tipo" id="" placeholder="Novo Tipo 2023">
                                    <button class="btn btn-success" type="submit">cadastrar</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="row  justify-content-center">
                    <div class="col-md-8">
                        <form action="{{ route('admin.cadastroCapacidade') }}" method="post">
                            @csrf
                            <fieldset>
                                <legend>Capacidade</legend>
                                <div class="input-group mb-1">
                                    <select class="form-select form-select-sm" name="modelo_id" id="">
                                        <option value="0" selected>Modelos</option>
                                        @foreach ($listaModelo as $modelos)
                                            <option value="{{ $modelos->id }}">{{ $modelos->nome_modelo }}</option>
                                        @endforeach
                                    </select><br />
                                    <input type="text" name="capacidade" id="" placeholder="512GB">
                                    <button class="btn btn-success" type="submit">cadastrar</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="row  justify-content-center">
                    <div class="col-8">
                        <form action="{{ route('admin.cadastroVelocidade') }}" method="post">
                            <fieldset>
                                <legend>Velocidade</legend>
                                @csrf
                                <div class="input-group mb-1">
                                    <select class="form-select form-select-sm " name="modelo_id" id="">
                                        <option value="0" selected>Modelos</option>
                                        @foreach ($listaModelo as $modelos)
                                            <option value="{{ $modelos->id }}">{{ $modelos->nome_modelo }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <input type="text" name="leitura" id="" placeholder="550mb/s">
                                <input type="text" name="escrita" id="" placeholder="450mb/s">
                                <button class="btn btn-success" type="submit">cadastrar</button>
                            </fieldset>
                        </form>
                    </div>
                </div>

                <div class="row  justify-content-center">
                    <div class="col-md-8">
                        <form action="{{ route('admin.cadastroAplicacao') }}" method="post">
                            @csrf
                            <fieldset>
                                <legend>Aplicação</legend>
                                <div class="input-group mb-1">
                                    <select class="form-select form-select-sm" name="modelo_id" id="">
                                        <option value="0" selected>Modelos</option>
                                        @foreach ($listaModelo as $modelos)
                                            <option value="{{ $modelos->id }}">{{ $modelos->nome_modelo }}</option>
                                        @endforeach
                                    </select><br />
                                    <input type="text" name="nome_aplicacao" id="" placeholder="PC, notebook, console">
                                    <button class="btn btn-success" type="submit">cadastrar</button>
                                </div>
                            </fieldset>
                        </form>
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
