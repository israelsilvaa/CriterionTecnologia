@extends('layout.basico')

@section('titulo', 'Pagina inicial')

@section('conteudo')

    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="{{ asset('/images/01.jpg') }}" class="d-none d-md-block w-100" alt="...">
                    <img src="{{ asset('/images/01_pequena.jpg') }}" class="d-block d-md-none w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Varias capacidades</h5>
                        <p>Modelos com 256gb, 512gb e 1tb para não faltar espaço.</p>
                    </div>
                </div>
                <div class="carousel-item " data-bs-interval="3000">
                    <img src="{{ asset('/images/02.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="{{ asset('/images/03.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon"</span>
                    <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <main class="flex-fill">
        <div class="container text-white">

            <hr>
            <h2>O que é um SSD?</h2>
            <p>
                O SSD (Solid State Drive ou unidade em estado sólido) é um componente de hardware que substitui o antigo HD
                (Hard Disk ou disco rígido) como unidade de armazenamento de dados nos PCs. Muito mais rápido, o SSD não
                possui
                discos físicos ou agulhas magnéticas, sendo capaz de acessar dados em uma fração de segundo e tornar seu
                computador mais ágil para abrir programas e executar tarefas.
            </p>
            <h2>Como funciona um SSD?</h2>
            Os SSDs mais comuns no mercado possuem dois componentes fundamentais: a memória flash e o controlador.

            <p>
                A memória flash guarda todos os arquivos e, diferente dos discos magnéticos dos HDs, não necessita de partes
                móveis
                nem motores para funcionar. Todas as operações são feitas eletricamente, tornando as operações de leitura e
                escrita
                mais rápidas, além de deixar o drive mais silencioso e resistente a vibrações e quedas.
            </p>

            <p>A Criterion trás essa tecnologia até você, trabalhamos com os principais modelos do mercado como: Sata 3 e
                NVMe
                M.2, não perca mais tempo, peça já o seu!</p>
        </div>
    </main>


@endsection
