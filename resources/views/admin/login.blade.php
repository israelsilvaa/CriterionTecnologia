@extends('admin.layout.loginBasico')

@section('titulo', 'Login')

@section('conteudo')

    <main class="form-signin w-100 m-auto ">
        <form action="{{ route('logar') }}" method="post">
            @csrf
            <img class="mb-2" src="{{ url('storage/modelos/logo.png') }}" alt="" width="315" height="100">
            <h1 class="h3 mb-3 fw-normal text-success">Login</h1>

            <div class="form-floating text-dark">
                <input type="email" value="{{ old('usuario') }}" name="usuario" class="form-control" id="floatingInput"
                    placeholder="name@example.com">
                @if ($errors->has('usuario'))
                    <span class="errors text-danger"> {{ $errors->first('usuario') }}</span>
                @endif
                <label for="floatingInput">Usuário</label>
            </div>
            <div class="form-floating text-dark">
                <input type="password" name="senha" value="{{ old('senha') }}" class="form-control" id="floatingPassword"
                    placeholder="Password">
                <label for="floatingPassword">Senha</label>
            </div>
            @if ($errors->has('senha'))
                <span class="errors text-danger"> {{ $errors->first('senha') }}</span>
            @endif


            <button class="btn btn-primary w-100 py-2" type="submit">Entrar</button>
            <div class="row mt-5 text-center">
                <div class="col-12">
                    <a class="link text-white" href="/">Voltar</a>
                </div>
            </div>
            <p class="mt-5 mb-3 text-body-white text-center">CT - 2023–2023</p>
        </form>
    </main>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

@endsection
