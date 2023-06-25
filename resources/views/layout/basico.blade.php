<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>

<body class="fundo-dark">
    <div class="d-flex flex-column wrapper">
        <nav class="navbar navbar-expand-lg bg-dark border-bottom shadow-sm mb-3 ">
            <div class="container ">
                <div class="row ">
                    <div class="col-auto ">
                        <a href="/">
                            <img src="{{ asset('/images/logo_1.png') }}" width="150px" height="50px" alt="" />
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
                            <a class="nav-link link-secondary" href="/login">Área do administrador</a>
                        </li>
                    </ul>
                    <div class="align-self-end">
                        <ul class="navbar-nav">
                            <li class="nav-item ">
                                <a class="nav-link link-secondary " aria-current="page" href="/">Pagina inicial</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-secondary" href="{{ route('visitante.modelos') }}">Modelos e
                                    disponibilidade</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-secondary" href="{{ route('visitante.garantia') }}">Consulta de garantia</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-secondary" href="{{ route('visitante.sobre-nos') }}">Sobre-nós</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        @yield('conteudo')

        <footer class="border-top text-muted bg-dark">
            <div class="container">
                <div class="row py-3">
                    <div class="col-12 col-md-6 text-center">
                        <a class="text-decoration-none link-secondary " href="#">Privacidade</a><br>
                        <a class="text-decoration-none link-secondary" href="#">Politica de devoluções</a><br>
                        <a class="text-decoration-none link-secondary" href="#">Termos de uso</a><br>
                        <a class="text-decoration-none link-secondary" href="/login">Área do administrador</a><br>
                    </div>
                    <div class="col-12 col-md-6 text-center ">

                        <span>Contatos:</span><br>
                        <a href="https://www.facebook.com/CriterionTecnologia/" class="text-decoration-none link-secondary">
                            <i class="fa-brands fa-facebook " style="color: #000000;"></i>
                            Facebook
                        </a><br>

                        <a  class="text-decoration-none link-secondary">
                            <i class="fa-brands fa-whatsapp" style="color: #000000;"></i>
                            (091) 98017-5325
                        </a><br>

                        <a href="mailto:ct@gmail.com" class="text-decoration-none link-secondary">
                            <i class="fa-regular fa-envelope" style="color: #000000;"></i>
                            ct@gmail.com
                        </a><br>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
        <script src="https://kit.fontawesome.com/bf4bab225b.js" crossorigin="anonymous"></script>
    </div>
</body>

</html>
