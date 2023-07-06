<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ url('storage/modelos/estilos.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

    <title>@yield('titulo')</title>
    @livewireStyles
</head>

<body class="bg-dark">
    <div class="d-flex flex-column wrapper">
        <nav class="navbar navbar-expand-lg bg-dark border-bottom shadow-sm mb-3 ">
            <div class="container ">
                <div class="row ">
                    <div class="col-auto ">
                        <a href="/">
                            <img src="{{ url('storage/modelos/logo.png') }}" width="150px" height="50px" alt=""/>
                        </a>
                    </div>
                </div>
                <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse"
                    data-bs-target=".navbar-collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav flex-grow-1 ">
                        <li class="nav-item">
                            <a class="nav-link link-secondary" href="{{route('admin.painel')}}">Painel</a>
                        </li>
                    </ul>
                    <div class="align-self-end">
                        <ul class="navbar-nav">
                            <li class="nav-item ">
                                <p class="nav-link link-secondary ">{{ $_SESSION['name']}}</p>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link link-secondary " aria-current="page"
                                    href="{{ route('admin.cadastroEspecificacoes') }}">Cadastrar
                                    Especificações</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-secondary" href="{{ route('admin.cadastroProduto') }}">Cadastrar Produto</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-secondary" href="{{ route('admin.cadastroVenda') }}">Cadastrar venda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-danger"
                                href="{{ route('admin.sair') }}">Sair</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        @yield('conteudo')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
    </div>
    @livewireScripts
</body>

</html>
