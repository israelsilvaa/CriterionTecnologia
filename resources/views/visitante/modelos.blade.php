@extends('layout.basico')

@section('titulo', 'Modelos')

@section('conteudo')


    <main class="flex-fill">
        <div>
            @livewire('filtro')
        </div>
    </main>


    
@endsection()
