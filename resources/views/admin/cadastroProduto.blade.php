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
        <h1 class="text-center">Adicionar produto</h1>
        <div class="col-5">
          <form action="" method="post">
            <label for="">Marca</label>
            <select name="" id="">
              <option value="1">kingSpec</option>
              <option value="2">Netac</option></select
            ><br />
            <label for="">Modelo</label>
            <select name="" id="">
              <option value="1">NV3000</option>
              <option value="2">NX series</option>
              <option value="3">Sata convencional</option>
            </select
            ><br />
            <label for="">capacidade</label>
            <select name="" id="">
              <option value="1">256gb</option>
              <option value="2">500gb</option>
              <option value="2">512gb</option>
              <option value="2">1tb</option></select
            ><br />
            <label for="">tipo</label>
            <select name="" id="">
              <option value="1">Sata III</option>
              <option value="2">NVMe M.2</option></select
            ><br />
            <label for="">Número de série</label>
            <input type="number">
            <br />
            <label for="">Aplicação</label>
            <select name="" id="">
              <option value="1">Pc, notebook, console</option>
              <option value="2">Pc, notebook</option></select
            ><br />
            <button type="submit" class="btn btn-success">cadastrar</button>
          </form>
        </div>
      </div>

      <div class="row col-6 offset-3 mt-4">
        <footer class="text-danger text-center">
          <a href="{{route('admin.painel')}}" class="link link-info text-dark"> Voltar</a>
        </footer>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
@endsection
