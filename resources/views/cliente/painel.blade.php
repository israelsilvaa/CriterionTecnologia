@extends('cliente.layout.basico2')

@section('titulo', 'Painel')

@section('conteudo')
    <div class="container bg-secondary mt-5 rounded-4">
        <div class="row justify-content-center">
            <div class="col-auto ">
                <img src="{{ asset('/images/logo_1.png') }}" width="190px" height="70px" alt="" />
            </div>
        </div>

        <div>
            <h1>PAINEL CLIENTE</h1>
        </div>

        <div class="row col-6 offset-3 mt-4 ">
            <footer class="text-danger text-center">
                <a class="nav-link link-danger" href="{{ route('admin.sair') }}">Sair</a>
            </footer>
        </div>
    </div>

@endsection
