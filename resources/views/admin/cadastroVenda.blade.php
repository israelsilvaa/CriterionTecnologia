@extends('admin.layout.basico')

@section('titulo', 'Cadastrar venda')

@section('conteudo')
    <div class="container bg-secondary mt-5 rounded-5">
        <div class="row justify-content-center">
            <div class="col-auto ">
                <img src="{{ asset('/images/logo_1.png') }}" width="190px" height="70px" alt="" />
            </div>
        </div>
        <div class="row justify-content-center">
            <h1 class="text-center">Adicionar Venda</h1>
            <div class="col-md-8">
                <form action="{{ route('admin.cadastroVenda') }}" method="post">
                    @csrf

                    <div class="input-group mb-1">
                        <span class="input-group-text" id="basic-addon1">Cliente</span>
                        <input type="text" class="form-control" name="cliente" placeholder="joão da silva">
                    </div>

                    <div class="input-group mb-1">
                        <span class="input-group-text" id="basic-addon1">Data da venda</span>
                        <input type="date" class="form-control" name="data_venda" aria-label="data_venda"
                            aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-1">
                        <span class="input-group-text" id="basic-addon1">Valor</span>
                        <input type="decimal" class="form-control" name="preco_venda" placeholder="R$ 500" aria-label="Valor"
                            aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-1">
                        <span class="input-group-text" id="basic-addon1">Nº/S</span>
                        <input type="text" class="form-control" name="numero_serie" placeholder="222555h4h55g6X"
                            aria-label="numero_serie" aria-describedby="basic-addon1">
                    </div>

                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" name="observacao" cols="60" rows="3" id="floatingTextarea">N/A</textarea>
                        <label for="floatingTextarea">Observação</label>
                    </div>

                    <div class=" text-center">
                        <button type="submit" class="btn btn-success btn-block mt-3 ">cadastrar</button>
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
