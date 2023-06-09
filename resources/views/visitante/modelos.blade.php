@extends('visitante.layout.basico')

@section('titulo', 'Modelos')

@section('conteudo')
    <div class="container bg-secondary mt-5 rounded-5">
        <div class="row">
            <div class="col-6 offset-4 mt-2">
                <img src="{{asset('/images/logo_1.png')}}" width="190px" height="70px" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md mt-4">
                <h1 class="text-center">Modelos e especificações </h1>
                <h4>KingSpec - Sata III </h4>
                <p class="text-white text-justify">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Capacidade</th>
                            <th scope="col">Leitura/escrita</th>
                            <th scope="col">Aplicação</th>
                            <th scope="col">A vista</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>256gb</td>
                            <td>550mb/450mb</td>
                            <td>PC, Notebook, consoles</td>
                            <td>R$ 130</td>
                        </tr>
                        <tr>
                            <td>512gb</td>
                            <td>550mb/450mb</td>
                            <td>PC, Notebook, consoles</td>
                            <td>R$ 200</td>
                        </tr>
                        <tr>
                            <td>1tb</td>
                            <td>550mb/450mb</td>
                            <td>PC, Notebook, consoles</td>
                            <td>R$ 380</td>
                        </tr>
                    </tbody>
                </table>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md mt-4">
                <h4>KingSpec - NVME M.2 </h4>
                <p class="text-white text-justify">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Capacidade</th>
                            <th scope="col">Leitura/escrita</th>
                            <th scope="col">Aplicação</th>
                            <th scope="col">geração</th>
                            <th scope="col">a vista</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>512gb</td>
                            <td>3200mb/2700mb</td>
                            <td>PC, Notebook</td>
                            <td>3.0</td>
                            <td>R$ 200</td>
                        </tr>
                        <tr>
                            <td>1tb</td>
                            <td>3200mb/2700mb</td>
                            <td>PC, Notebook</td>
                            <td>3.0</td>
                            <td>R$ 400</td>
                        </tr>
                    </tbody>
                </table>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md mt-4">
                <h4>Netac - NVME M.2 </h4>
                <p class="text-white text-justify">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Capacidade</th>
                            <th scope="col">Leitura/escrita</th>
                            <th scope="col">Aplicação</th>
                            <th scope="col">geração</th>
                            <th scope="col">a vista</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>500gb</td>
                            <td>3000mb/2700mb</td>
                            <td>PC, Notebook</td>
                            <td>3.0</td>
                            <td>R$ 230</td>
                        </tr>
                        <tr>
                            <td>1tb</td>
                            <td>3000mb/2700mb</td>
                            <td>PC, Notebook</td>
                            <td>3.0</td>
                            <td>R$ 460</td>
                        </tr>
                    </tbody>
                </table>
                </p>
            </div>
        </div>

        <div class="row col-6 offset-3 mt-4 ">
            <footer class="text-danger text-center">
                <a href="/" class="link link-secondary text-dark"> Voltar</a>
            </footer>
        </div>
    </div>
@endsection()
