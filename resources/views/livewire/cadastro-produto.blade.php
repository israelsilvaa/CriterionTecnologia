<div>
    <div class="row justify-content-center">
        <h2 class="text-center">Novo produto</h2>
        <div class="col-md-8 ">

            <h6 class="text-center">Informações do produto</h6>
            <form action="{{ route('admin.cadastroProduto') }}" method="post">
                @csrf

                <div class="input-group mb-1">
                    <span class="input-group-text" id="basic-addon1">Número de série</span>
                    <input type="text" class="form-control" name="numero_serie" id=""
                        placeholder="11155577799 " aria-label="nome_produto" aria-describedby="basic-addon1">
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-12">

                        <label for="nome_marca">Marca</label>
                        <select class="form-select form-select-sm"
                        name="nome_marca" 
                        wire:model="marca_id" 
                        wire:change="filtroModeloPorMarcaId" 
                        >
                            <option value="0" class="text-danger" selected>Marca</option>
                            @foreach ($marca->all(['id', 'nome_marca']) as $marca)
                                <option value="{{ $marca->id }}">
                                    {{ $marca->nome_marca }}
                                </option>
                            @endforeach
                        </select><br />
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label for="nome_modelo">Modelo</label>
                        <select class="form-select form-select-sm" name="nome_modelo" id="">
                            <option value="0" selected><span class="text-danger">Modelos</span></option>
                            @if (isset($modelos))
                                @foreach ($modelos as $modelo)
                                    <option value="{{ $modelo->id }}">{{ $modelo->nome_modelo }}</option>
                                @endforeach
                            @else
                                <option value="">
                                    --
                                </option>
                            @endif
                        </select><br />
                    </div>
                </div>

                <h6 class="text-center">Informações de importação</h6>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="input-group mb-1">
                            <span class="input-group-text" id="basic-addon1">Preço</span>
                            <input type="decimal" class="form-control" name="preco_importacao" id=""
                                placeholder="R$180.50 " aria-label="nome_produto" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="input-group mb-1">
                            <span class="input-group-text" id="basic-addon1">Número do Lote</span>
                            <input type="text" class="form-control" name="lote" id=""
                                placeholder="#55 " aria-label="numero_lote" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="input-group mb-1">
                            <span class="input-group-text" id="basic-addon1">Pedido</span>
                            <input type="date" class="form-control" name="data_pedido" aria-label="nome_produto"
                                aria-describedby="basic-addon1">
                        </div>

                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="input-group mb-1">
                            <span class="input-group-text" id="basic-addon1">Chegada</span>
                            <input type="date" class="form-control" name="data_chegada" aria-label="nome_produto"
                                aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-block">cadastrar</button>
                </div>

            </form>
        </div>
    </div>
</div>
