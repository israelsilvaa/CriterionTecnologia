@extends('admin.layout.basico')

@section('titulo', 'Cadastrar venda')

@section('conteudo')
    <div class="container bg-secondary mt-5 rounded-5">
        <div class="row">
            <div class="col-6 offset-5">
                <img src="/images/logo_1.png" width="190px" height="70px" alt="" />
            </div>
        </div>
        <div class="row">
            <h1 class="text-center">Adicionar Venda</h1>
            <div class="col">
                <form action="{{route('admin.cadastroVenda')}}" method="post">
                    @csrf
                    <label for="">Cliente</label>
                    <input type="text" name="cliente" id="" placeholder="joão da silva"><br>

                    <label for="">Data da venda</label>
                    <input type="date" name="data_venda" id=""><br />

                    <label for="">Valor</label>
                    <input type="decimal" name="valor" id="" placeholder="R$ 99"><br>

                    <label for="">N/S</label>
                    <input type="text" name="numero_serie" id="" placeholder="222555h4h55g6X"><br>

                    <label for="">Observação</label><br>
                    <textarea name="observacao" id="" cols="60" rows="3">Sem observações.</textarea><br>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
@endsection
