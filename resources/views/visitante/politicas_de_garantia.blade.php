@extends('layout.basico')

@section('titulo', 'Formas de entrega')

@section('conteudo')

    <main class="flex-fill">
        <div class="container">
            <h2 class="text-white">Garantia:</h2>
            <div class="row">
                <div class="col-sm-12 col-md-6 text-white mt-4">
                    <p>
                        O que a garantia da loja cobre? <br>
                    <ol>
                        <li>SSD MUITO lento, incompatível com as velocidades referência.</li>
                        <li>SSD em formato RAW.</li>
                        <li>só liga o led, mas não inicia.</li>
                        <li>Não gostei da cor</li>
                    </ol>
                    </p>
                </div>
                <div class="col-sm-12 col-md-6 text-white mt-4">
                    <p>
                        O que <span class="text-danger">NÃO</span> cobre? <br>
                    <ol>
                        <li>máquina não suporta entrada do SSD (m.2, Sata).</li>
                        <li>me arrependi da compra.</li>
                        <li>quero um tamanho maior. </li>
                    </ol>
                    </p>
                </div>
            </div>
            <h2 class="text-white" >Em caso de estar dentro dos criterios:</h2>
            <ul class="text-white mt-4">
                <li>Substituição da peça por outra identica(caso não haja estoque o dinhero sera devolvido integralmente)</li>
                <li>Ticket com valor da compra para qualquer outro produto da loja</li>
                <li>Dovolutiva do valor pago(integralmente)</li>
            </ul>
        </div>
    </main>


@endsection
