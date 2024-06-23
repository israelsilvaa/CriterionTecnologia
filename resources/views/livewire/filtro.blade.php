<div class="container">
    <div class="row g-3 text-white d-flex justify-content-center">
        <div class="row pb-3">
            <div class="d-flex flex-row-reverse justify-content-center justify-content-md-center">
                <div class="col-10">
                    <h4>Modelos e disponibilidade</h4>
                    <form class="">
                        <div class="col-md-3">
                            <div class="form-floating mb-3">
                                <select class="form-select form-select-sm" id="filtroProdutos" name="filtrar_por"
                                    aria-label="Floating label select example" wire:model="filtro" wire:change="filtrarModelos">
                                    <option selected value="preco">preço</option>
                                    <option value="marca">Marca</option>
                                    <option value="tipo">Tipo</option>
                                    <option value="capacidade">capacidade</option>
                                </select>
                                <label for="filtroProdutos">Filtrar por:</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @isset($modelos_lista)
            @foreach ($modelos_lista as $ssd)
                @if ($ssd->disponibilidade)
                    <div class="col-10 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card text-center text-white bg-dark">
                            <a href="#" class="position-absolute end-0 p-2 text-danger">
                                <i class="bi bi-suit-heart" style="font-size: 20px; line-height: 20px"></i>
                            </a>
                            <img src="{{ url('storage/'.$ssd->imagem_card) }}" class="card-img-top" alt="...">
                            <div class="card-header text-success">
                                <small>
                                    R${{ $ssd->preco }} <span class="no-pix">à vista no Pix</span>
                                </small>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $ssd->marca }} {{ $ssd->capacidade }}</h5>
                                <p class="card-text truncar-3l">{{ $ssd->modelo }}, leitura:{{ $ssd->leitura }},
                                    escrita: {{ $ssd->escrita }}, para {{ $ssd->aplicacao }}</p>
                            </div>
                            <div class="card-footer">
                                <a href="produto/{{ $ssd->modelo_id }}/{{ $ssd->disponibilidade }}" class="btn btn-success mt-2 d-inline">Ver mais</a><br>
                            </div>
                            <small class="text-success m-2">{{ $ssd->disponibilidade }} unidades disponiveis</small>
                        </div>
                    </div>
                @else
                    <div class="col-10 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card text-center text-white bg-dark">
                            <a href="#" class="position-absolute end-0 p-2 text-danger">
                                <i class="bi bi-suit-heart" style="font-size: 20px; line-height: 20px"></i>
                            </a>
                            <img src="{{ url('storage/'.$ssd->imagem_card) }}" class="card-img-top" alt="...">
                            <div class="card-header text-secondary">
                                <small>
                                    R$ {{ $ssd->preco }} <span class="no-pix">à vista no Pix</span>
                                </small>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $ssd->marca }} {{ $ssd->capacidade }}</h5>
                                <p class="card-text truncar-3l">{{ $ssd->modelo }}, leitura:{{ $ssd->leitura }},
                                    escrita: {{ $ssd->escrita }}, para {{ $ssd->aplicacao }}</p>
                            </div>
                            <div class="card-footer">
                                <a href="produto/{{ $ssd->modelo_id }}/{{ $ssd->disponibilidade }}" class="btn btn-secondary mt-2 d-inline">ver mais</a><br>
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
