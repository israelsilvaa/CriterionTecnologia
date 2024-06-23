@extends('layout.basico')

@section('titulo', 'Pagina inicial')

@section('conteudo')

    {{-- sm: 576px,
md: 768px,
lg: 992px,
xl: 1200px,
xxl: 1400px --}}
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
                <div class="carousel-item active" data-bs-interval="6000">
                    <a href="{{ route('visitante.modelos') }}">
                        <img src="{{ url('storage/modelos/nx576.png') }}" class="d-sm-block d-md-none w-100" alt="...">
                        <img src="{{ url('storage/modelos/nx768.png') }}" class="d-none d-md-block d-lg-none w-100"
                            alt="...">
                        <img src="{{ url('storage/modelos/nx992.png') }}" class="d-none d-lg-block w-100" alt="992">
                        <div class="carousel-caption ">
                    </a>
                </div>
            </div>

            <div class="carousel-item " data-bs-interval="6000">
                <a href="{{ route('visitante.modelos') }}">
                    <img src="{{ url('storage/modelos/nt576.png') }}" class="d-sm-block d-md-none w-100" alt="...">
                    <img src="{{ url('storage/modelos/nt768.png') }}" class="d-none d-md-block d-lg-none w-100"
                        alt="...">
                    <img src="{{ url('storage/modelos/nt992.png') }}" class="d-none d-lg-block w-100" alt="992">
                </a>
            </div>

            <div class="carousel-item" data-bs-interval="6000">
                <a href="{{ route('visitante.modelos') }}">
                    <img src="{{ url('storage/modelos/sata576.png') }}" class="d-sm-block d-md-none w-100" alt="...">
                    <img src="{{ url('storage/modelos/sata768.png') }}" class="d-none d-md-block d-lg-none w-100"
                        alt="...">
                    <img src="{{ url('storage/modelos/sata992.png') }}" class="d-none d-lg-block w-100" alt="992">
                </a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon"</span>
                <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>
    <main class="flex-fill">
        <div class="container text-white">
            <div class="row">
                <hr>
                <h2>O que é um SSD?</h2>
                <p class="texto">
                    O SSD (Solid State Drive ou unidade em estado sólido) é um componente de hardware que substitui o antigo
                    HD
                    (Hard Disk ou disco rígido) como unidade de armazenamento de dados nos PCs. Muito mais rápido, o SSD não
                    possui
                    discos físicos ou agulhas magnéticas, sendo capaz de acessar dados em uma fração de segundo e tornar seu
                    computador mais ágil para abrir programas e executar tarefas.
                </p>
            </div>

            <div class="row">
                <h2>Como funciona um SSD?</h2>

                <p class="texto">
                    Os SSDs mais comuns no mercado possuem dois componentes fundamentais: a memória flash e o controlador. A
                    memória flash guarda todos os arquivos e, diferente dos discos magnéticos dos HDs, não necessita de
                    partes
                    móveis
                    nem motores para funcionar. Todas as operações são feitas eletricamente, tornando as operações de
                    leitura e
                    escrita
                    mais rápidas, além de deixar o drive mais silencioso e resistente a vibrações e quedas.
                </p>

                <p class="texto">A Criterion traz essa tecnologia até você, trabalhamos com os principais modelos do
                    mercado como: Sata 3
                    e
                    NVMe
                    M.2, não perca mais tempo, peça já o seu!</p>

            </div>
        </div>
    </main>


@endsection
