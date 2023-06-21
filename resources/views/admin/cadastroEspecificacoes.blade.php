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
                                </div>
                                <div class="row  input-group mb-1">
                                    <div class="col-6 ">
                                        <label for="">nome do modelo</label>
                                        <input type="text" name="nome_modelo" id="" placeholder="P3-512">
                                        
                                    </div>
                                    <div class="col-6">
                                        <label for="">nome do produto</label>
                                        <input type="text" name="nome_produto" id="" placeholder="SSD Sata 2.5">
                                    </div>
                                </div>
                                <div class="input-group mb-1">
                                    <select class="form-select form-select-sm" name="tipo_id" id="">
                                        <option value="0" selected>Tipo</option>
                                        @foreach ($listaTipo as $tipo)
                                        <option value="{{ $tipo->id }}">{{ $tipo->nome_tipo }}</option>
                                        @endforeach
                                    </select><br />
                               
                                    <select class="form-select form-select-sm" name="capacidade_id" id="">
                                        <option value="0" selected>Capacidade</option>
                                        @foreach ($listaCapacidade as $capacidade)
                                        <option value="{{ $capacidade->id }}">{{ $capacidade->capacidade }}</option>
                                        @endforeach
                                    </select><br />
                                </div>
                                <div class="input-group mb-1">
                                    <select class="form-select form-select-sm" name="velocidade_id" id="">
                                        <option value="0" selected>Velocidade</option>
                                        @foreach ($listaVelocidade as $velocidade)
                                            <option value="{{ $velocidade->id }}">{{ $velocidade->leitura}}-{{ $velocidade->escrita}}</option>
                                        @endforeach
                                    </select><br />
                                    
                                    <select class="form-select form-select-sm" name="aplicacao_id" id="">
                                        <option value="0" selected>Aplicação</option>
                                        @foreach ($listaAplicacao as $aplicacao)
                                            <option value="{{ $aplicacao->id }}">{{ $aplicacao->nome_aplicacao }}</option>
                                        @endforeach
                                    </select><br />
                                </div>
                                <div class="input-group mb-1">
                                    <select class="form-select form-select-sm" name="geracao_id" id="">
                                        <option value="0" selected>Geração</option>
                                        @foreach ($listaGeracao as $geracao)
                                            <option value="{{ $geracao->id }}">{{ $geracao->geracao }}</option>
                                        @endforeach
                                    </select><br />
                                    <input type="text" name="preco" id="" placeholder="Preço R$400">
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
                                    <input type="text" name="nome_aplicacao" id=""
                                        placeholder="PC, notebook, console">
                                    <button class="btn btn-success" type="submit">cadastrar</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>

                <div class="row  justify-content-center">
                    <div class="col-md-8">
                        <form action="{{ route('admin.cadastroGeracao') }}" method="post">
                            @csrf
                            <fieldset>
                                <legend>Geração</legend>
                                <div class="input-group mb-1">
                                    <input type="text" name="geracao" id=""
                                        placeholder="Gen5.0x4">
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
