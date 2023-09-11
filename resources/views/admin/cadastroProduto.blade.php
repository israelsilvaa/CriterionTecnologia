@extends('admin.layout.basico')

@section('titulo', 'Cadastrar Produto')

@section('conteudo')
    <div class="container bg-secondary text-center  mt-5 rounded-5">
       
        <div>
            @livewire('cadastro-produto')
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
@endsection
