<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/stilos.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

    <title>CSS</title>
</head>

<body class="fundo">
    <div class="container bg-secondary mt-5 rounded-5">
        <div class="row">
            <div class="col-md mt-4">
                <h1>Opss...</h1>
                <p class="text-white text-justify">
                    A pagina que voce tentou acessar não existe, <a href="{{route('index')}}" class="text-info">clique aqui</a>  para voltar a pagina inicial
                </p>
            </div>
            
        </div>

       

        <div class="row col-6 offset-3 mt-4">
            <footer class="text-center">
                <a href="/teste" class="link link-success text-dark"> admin</a> |
                <span>Desenvolvido por IsraelSilva</span>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
