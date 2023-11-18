<div>
    <div class="container">
        <div class="row g-3 text-white d-flex  justify-content-center ">
            <div class="row pb-3">
                <div class="d-flex flex-row-reverse justify-content-center justify-content-md-center  ">
                    <div class="col-10">
                        <h4>Modelos e disponibilidade</h4>
                        <form class="d-inline-block">
                            <label for="filtrar_por">Filtrar por:</label>
                            <select class="form-select form-select-sm" name="filtrar_por" 
                                wire:model="filtro"
                                wire:change="filtrarModelos">
                                <option value="preco">preço</option>
                                <option value="marca">Marca</option>
                                <option value="tipo">Tipo</option>
                                <option value="capacidade">capacidade</option>
                            </select>
                        </form>

                        {{-- <form class="d-inline-block">
                            <label for="ordem_filtro">Ordem:</label>
                            <select class="form-select form-select-sm" name="ordem_filtro" 
                                wire:model="ordem"
                                wire:change="filtrarModelos">
                                <option value="asc">crescente</option>
                                <option value="desc">descrecente</option>
                            </select>
                        </form> --}}
                        {{-- <nav class="d-inline-block me-3">
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
                        </nav> --}}
                    </div>
                </div>
            </div>
            @isset($modelos_lista)
                @foreach ($modelos_lista as $ssd)
                    {{-- {{ dd($modelos_lista) }} --}}
                    @if ($ssd->disponibilidade)
                        <div class="col-10 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center text-white  cor-texto-card bg-dark">
                                <a href="#" class="position-absolute end-0 p-2 text-danger">
                                    <i class="bi bi-suit-heart" style="font-size: 20px; line-height: 20px"></i>
                                </a>
                                <img src="{{ url("storage/{$ssd->imagem_card}") }}" class="card-img-top" alt="...">
                                <div class="card-header text-success">
                                    <small>
                                        R${{ $ssd->preco }} <span class="no-pix">à vista no Pix</span>
                                    </small>
                                </div>
                                {{-- <span class="no-cartao">4x de R${{$ssd->preco / 4}} sem juros no cartão de crédito</span> --}}
                                <div class="card-body">
                                    <h5 class="card-title">{{ $ssd->marca }} {{ $ssd->capacidade }}</h5>
                                    <p class="card-text truncar-3l">{{ $ssd->modelo }}, leitura:{{ $ssd->leitura }},
                                        escrita: {{ $ssd->escrita }}, para {{ $ssd->aplicacao }}</p>
                                </div>
                                <div class="card-footer">
                                    <a href=" produto/{{ $ssd->modelo_id }}/{{ $ssd->disponibilidade }}"
                                        class="btn btn-success mt-2 d-inline">Ver mais</a><br>
                                </div>
                                <small class="text-success m-2">{{ $ssd->disponibilidade }} unidades
                                    disponiveis</small>
                            </div>
                        </div>
                    @else
                        <div class="col-10 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center text-white bg-dark">
                                <a href="#" class="position-absolute end-0 p-2 text-danger">
                                    <i class="bi bi-suit-heart" style="font-size: 20px; line-height: 20px"></i>
                                </a>
                                <img src="{{ url("storage/{$ssd->imagem_card}") }}" class="card-img-top" alt="...">
                                <div class="card-header text-secondary">
                                    <small>
                                        R$ {{ $ssd->preco }} <span class="no-pix">à vista no Pix</span>
                                    </small>
                                </div>
                                {{-- <span class="no-cartao">4x de R${{$ssd->preco / 4}} sem juros no cartão de crédito</span> --}}
                                <div class="card-body">
                                    <h5 class="card-title">{{ $ssd->marca }} {{ $ssd->capacidade }}</h5>
                                    <p class="card-text truncar-3l">{{ $ssd->modelo }}, leitura:{{ $ssd->leitura }},
                                        escrita: {{ $ssd->escrita }}, para {{ $ssd->aplicacao }}</p>
                                </div>
                                <div class="card-footer">
                                    <a href=" produto/{{ $ssd->modelo_id }}/{{ $ssd->disponibilidade }}"
                                        class="btn btn-secondary  mt-2 d-inline">ver mais</a><br>
                                </div>
                                <small class="text-danger m-2"><b>Produto esgotado</b></small>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endisset


        </div>

        <hr class="mt-3">

    </div>
</div>
