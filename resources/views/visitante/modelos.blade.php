@extends('layout.basico')

@section('titulo', 'Modelos')

@section('conteudo')

    <main class="flex-fill">
        <div class="container">
            <div class="row g-3 text-white">
                <h4>Modelos e disponibilidade</h4>
                @isset($modelos)
                    @foreach ($modelos as $ssd)
                        @if ($ssd->disponibilidade)
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                <div class="card text-center text-white  cor-texto-card bg-dark">
                                    <a href="#" class="position-absolute end-0 p-2 text-danger">
                                        <i class="bi bi-suit-heart" style="font-size: 20px; line-height: 20px"></i>
                                    </a>
                                    <img src="{{ url("storage/{$ssd->imagem_card}")}}" class="card-img-top" alt="...">
                                    <div class="card-header text-success">
                                        R${{$ssd->preco}} à vista
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-title">{{$ssd->produto}}</h6>
                                        <p class="card-text truncar-3l">{{$ssd->modelo}}, leitura:{{$ssd->leitura}}, escrita: {{$ssd->escrita}}, para {{$ssd->aplicacao}}</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href=" produto/{{$ssd->modelo_id}}/{{$ssd->disponibilidade}}" class="btn btn-success mt-2 d-block">Ver mais</a><br>
                                        <small class="text-success">{{$ssd->disponibilidade}} unidades disponiveis</small>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                <div class="card text-center text-white bg-dark">
                                    <a href="#" class="position-absolute end-0 p-2 text-danger">
                                        <i class="bi bi-suit-heart" style="font-size: 20px; line-height: 20px"></i>
                                    </a>
                                    {{-- <img src="{{ url("storage/modelos/nx.png") }}" class="card-img-top" alt="..."> --}}
                                    <img src="{{ url("storage/{$ssd->imagem_card}")}}" class="card-img-top" alt="...">
                                    <div class="card-header">
                                        R$ {{$ssd->preco}} à vista
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-title">{{$ssd->produto}}</h6>
                                        <p class="card-text truncar-3l">{{$ssd->modelo}}, leitura:{{$ssd->leitura}}, escrita: {{$ssd->escrita}}, para {{$ssd->aplicacao}}</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href=" produto/{{$ssd->modelo_id}}/{{$ssd->disponibilidade}}" class="btn btn-secondary  mt-2 d-block">
                                            <small>ver mais</small>
                                        </a><br>
                                        <small class="text-danger">
                                            <b>Produto esgotado</b>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endisset


            </div>

            <hr class="mt-3">

        </div>
    </main>
    {{-- <div class="container">

        <div class="row pb-3">
            <div class="col-10">
                <div class="d-flex flex-row-reverse justify-content-center justify-content-md-start">
                    <form class="d-inline-block">
                        <select class="form-select form-select-sm">
                            <option>Ordenar pelo nome</option>
                            <option>Ordenar pela marca</option>
                            <option>Ordenar pelo menor preço</option>
                            <option>Ordenar pelo maior preço</option>
                        </select>
                    </form>
                    <nav class="d-inline-block me-3">
                        <ul class="pagination pagination-sm my-0">
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item disabled">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">6</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div> --}}
@endsection()
