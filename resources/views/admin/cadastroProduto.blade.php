@extends('admin.layout.basico')

@section('titulo', 'Cadastrar Produto')

@section('conteudo')
    <div class="container bg-secondary text-center  mt-5 rounded-5">
        <div class="row justify-content-center">
            <div class="col-auto ">
                <img src="{{ asset('/images/logo_1.png') }}" width="190px" height="70px" alt="" />
            </div>
        </div>
        <div class="row justify-content-center">
            <h2 class="text-center">Novo produto</h2>
            <div class="col-md-8 ">

                <h6 class="text-center">Informações do produto</h6>
                <form action="{{ route('admin.cadastroProduto') }}" method="post">
                    @csrf

                    <div class="input-group mb-1">
                        <span class="input-group-text" id="basic-addon1">Nome do produto</span>
                        <input type="text" class="form-control" name="nome_produto" placeholder="SSD sata..."
                            aria-label="nome_produto" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-1">
                        <span class="input-group-text" id="basic-addon1">Número de série</span>
                        <input type="text" class="form-control" name="numero_serie" id=""
                            placeholder="11155577799 " aria-label="nome_produto" aria-describedby="basic-addon1">
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-12">

                            <label for="nome_marca">Marca</label>
                            <select class="form-select form-select-sm" name="nome_marca" id="nome_marca"
                                onchange="selectMarca()">
                                <option value="0" selected>Marca</option>
                                @if (isset($listaMarca))
                                    @foreach ($listaMarca as $marca)
                                        <option value="{{ $marca->id }}">
                                            {{ $marca->nome_marca }}
                                        </option>
                                    @endforeach
                                @else
                                    <option value="">
                                        --
                                    </option>
                                @endif
                            </select><br />
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="nome_modelo">Modelo</label>
                            <select class="form-select form-select-sm" name="nome_modelo" id="">
                                <option value="0" selected>Modelos</option>
                                @if (isset($listaModelos))
                                    @foreach ($listaModelos as $modelos)
                                        <option value="{{ $modelos->id }}">{{ $modelos->nome_modelo }}</option>
                                    @endforeach
                                @else
                                    <option value="">
                                        --
                                    </option>
                                @endif
                            </select><br />
                        </div>
                    </div>

                    <label for="">Capacidade</label>
                    <select class="form-select form-select-sm" name="capacidade" id="">
                        <option value="0" selected>Capacidades</option>
                        @if (isset($listaCapacidades))
                            @foreach ($listaCapacidades as $capacidade)
                                <option value="{{ $capacidade->id }}">{{ $capacidade->capacidade }}</option>
                            @endforeach
                        @else
                            <option value="">
                                --
                            </option>
                        @endif
                    </select><br />

                    <label for="">tipo</label>
                    <select class="form-select form-select-sm" name="nome_tipo" id="">
                        <option value="0" selected>Tipos</option>
                        @if (isset($listaTipos))
                            @foreach ($listaTipos as $tipo)
                                <option value="{{ $tipo->id }}">{{ $tipo->nome_tipo }}</option>
                            @endforeach
                        @else
                            <option value="">
                                --
                            </option>
                        @endif
                    </select><br />

                    <label for="">Velocidade</label>
                    <select class="form-select form-select-sm" name="velocidade" id="">
                        <option value="0" selected>Velocidade de leitura/escrita</option>
                        @if (isset($listaVelocidade))
                            @foreach ($listaVelocidade as $velocidade)
                                <option value="{{ $velocidade->id }}">Leitura:{{ $velocidade->leitura }} -
                                    Escrita:{{ $velocidade->escrita }}</option>
                            @endforeach
                        @else
                            <option value="">
                                --
                            </option>
                        @endif
                    </select><br />



                    <label for="">Aplicação</label>
                    <select class="form-select form-select-sm" name="nome_aplicacao" id="">
                        <option value="0" selected>Tipos de aplicação</option>
                        @if (isset($listaAplicacoes))
                            @foreach ($listaAplicacoes as $aplicacao)
                                <option value="{{ $aplicacao->id }}">{{ $aplicacao->nome_aplicacao }}</option>
                            @endforeach
                        @else
                            <option value="">
                                --
                            </option>
                        @endif
                    </select><br />

                    <h6 class="text-center">Informações de importação</h6>
                    <div class="input-group mb-1">
                        <span class="input-group-text" id="basic-addon1">Preço</span>
                        <input type="decimal" class="form-control" name="preco_importacao" id=""
                            placeholder="R$180.50 " aria-label="nome_produto" aria-describedby="basic-addon1">
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="input-group mb-1">
                                <span class="input-group-text" id="basic-addon1">Pedido</span>
                                <input type="date" class="form-control" name="data_pedido" aria-label="nome_produto"
                                    aria-describedby="basic-addon1">
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="input-group mb-1">
                                <span class="input-group-text" id="basic-addon1">Chegada</span>
                                <input type="date" class="form-control" name="data_chegada" aria-label="nome_produto"
                                    aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success btn-block">cadastrar</button>
                    </div>
                
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
