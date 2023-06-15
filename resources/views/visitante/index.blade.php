@extends('visitante.layout.basico')

@section('titulo', 'Pagina inicial')

@section('conteudo')        
    <div class="container bg-secondary mt-5 rounded-5">
        <div class="row">
            <div class="col-md mt-4">
                <h1>Criterion Tecnologia</h1>
                <p class="text-white text-justify">
                    Loja especializada nos principais modelos de SSD's dos mercado como:
                    Sata 3; NVMe m.2 gen3/gen4 e M.2 sata. Garantia da loja de 30 dias
                    contra defeitos de fábrica.
                </p>
            </div>
            <div class="col-md-4 mt-5">
                <ul>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                            d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                        </svg>
                        <a href="{{ route('visitante.garantia') }}" class="link link-warning">Consulta de garantia</a>
                    </li>

                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                            d="M248 0H208c-26.5 0-48 21.5-48 48V160c0 35.3 28.7 64 64 64H352c35.3 0 64-28.7 64-64V48c0-26.5-21.5-48-48-48H328V80c0 8.8-7.2 16-16 16H264c-8.8 0-16-7.2-16-16V0zM64 256c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H224c35.3 0 64-28.7 64-64V320c0-35.3-28.7-64-64-64H184v80c0 8.8-7.2 16-16 16H120c-8.8 0-16-7.2-16-16V256H64zM352 512H512c35.3 0 64-28.7 64-64V320c0-35.3-28.7-64-64-64H472v80c0 8.8-7.2 16-16 16H408c-8.8 0-16-7.2-16-16V256H352c-15 0-28.8 5.1-39.7 13.8c4.9 10.4 7.7 22 7.7 34.2V464c0 12.2-2.8 23.8-7.7 34.2C323.2 506.9 337 512 352 512z" />
                        </svg>
                        <a href="{{route('visitante.modelos')}}" class="link link-warning">Nossos Modelos</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row col-12 mt-4">
            <h4 class="text-center">Contatos</h4>
            <span class="text-center">
                <i class="fa-brands fa-whatsapp" style="color: #1a8e47;"></i>
                (091)98017-5325 |
                <i class="fa-regular fa-envelope" style="color: #970c0c;"></i>
                ct@gmail.com |
                <i class="fa-brands fa-facebook " style="color: #005eff;"></i>
                <a class="link-dark" href="https://www.facebook.com/CriterionTecnologia">Facebook</a>
            </span>
        </div>
        
        
        @include('visitante.layout._partials.footerContato')

    </div>
@endsection


