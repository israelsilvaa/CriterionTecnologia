@extends('admin.layout.basico')

@section('titulo', 'Cadastrar Produto')

@section('conteudo')
    <div class="container bg-secondary mt-5 rounded-5">
        <div class="row">
            <div class="col-6 offset-5">
                <img src="/images/logo_1.png" width="190px" height="70px" alt="" />
            </div>
        </div>
        <div class="row">
            <h2 class="text-center">Novo produto</h2>
            <div class="col-12">
                <h6 class="text-center">Informações do produto</h6>
                <form action="{{ route('admin.cadastroProduto') }}" method="post">
                    @csrf

                    <label for="nome_marca">Nome do produto</label>
                    <input type="text" name="nome_produto" id="" placeholder="SSD sata...">
                    <br />

                    <label for="">Número de série</label>
                    <input type="text" name="numero_serie" id="" placeholder="NV3000x">
                    <br />

                    <label for="nome_marca">Marca</label>
                    <select name="nome_marca" id="" onchange="selectMarca()">
                        <option value="0" selected>selecione a marca</option>
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

                    <label for="nome_modelo">Modelo</label>
                    <select name="nome_modelo" id="">
                        @if (isset($listaMarca))
                            @foreach ($listaModelos as $modelos)
                                <option value="{{ $modelos->id }}">{{ $modelos->nome_modelo }}</option>
                            @endforeach
                        @else
                            <option value="">
                                --
                            </option>
                        @endif
                    </select><br />

                    <label for="">Capacidade</label>
                    <select name="capacidade" id="">
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
                    <select name="nome_tipo" id="">
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
                    <select name="velocidade" id="">
                        @foreach ($listaVelocidade as $velocidade)
                            <option value="{{ $velocidade->id }}">Leitura:{{ $velocidade->leitura }} -
                                Escrita:{{ $velocidade->escrita }}</option>
                        @endforeach
                    </select><br />



                    <label for="">Aplicação</label>
                    <select name="nome_aplicacao" id="">
                        @foreach ($listaAplicacoes as $aplicacao)
                            <option value="{{ $aplicacao->id }}">{{ $aplicacao->nome_aplicacao }}</option>
                        @endforeach
                    </select><br />

                    <h6 class="text-center">Informações de importação</h6>
                    <label for="">Preço</label>
                    <input type="decimal" name="preco_importacao" id="" placeholder="R$180.50">
                    <br />

                    <label for="">Data do pedido</label>
                    <input type="date" name="data_pedido" id="">
                    <br />

                    <label for="">Data de chegada</label>
                    <input type="date" name="data_chegada" id="">
                    <br>
                    <button type="submit" class="btn btn-success">cadastrar</button>
                </form>
            </div>
        </div>

        <div class="row col-6 offset-3 mt-4">
            <footer class="text-danger text-center">
                <a href="{{ route('admin.painel') }}" class="link link-info text-dark"> Voltar</a>
            </footer>
        </div>
    </div>
    <script>
        function selectMarca() {
            var selectElement = document.querySelector('select');
            var selectedValue = selectElement.value;
            var selectedOptionText = selectElement.options[selectElement.selectedIndex].text;

            view('admin.cadastroProduto')
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
@endsection
