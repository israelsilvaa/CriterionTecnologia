@extends('admin.layout.basico')

@section('titulo', 'Login')

@section('conteudo')
    <div class="container">
        <div class="card bg-secondary">

            <div class="row mt-4">
                
                <h2 class="text-center">Login</h2>
                <div class="col-5 offset-4 mt-4">
                    <form action="{{ route('logar') }}" method="post">
                        @csrf
                        <label for="">Usuário</label>
                        <input type="text" name="usuario"><br>
                        <label for="">Senha</label>
                        <input type="password" name="senha">
                        <button type="submit" class="offset-5 btn btn-success">Entar</button>
                    </form>
                </div>
                
                <div class="row mt-5 text-center">
                    <div class="col-12">
                        <a class="link-dark" href="/">Voltar</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection