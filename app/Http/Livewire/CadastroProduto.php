<?php

namespace App\Http\Livewire;

use App\Models\{Marca, Modelo};
use Livewire\Component;

class CadastroProduto extends Component
{
    public $marca;
    public $marca_id;

    public $modelos = null;
    
    public function mount(Marca $marca){
        $this->marca = $marca;
    }

    public function filtroModeloPorMarcaId(){
        $this->modelos = $this->marca->find($this->marca_id)->Modelo;
        // dd($this->modelos->count());
    }

    public function render()
    {
        return view('livewire.cadastro-produto');
    }
}
