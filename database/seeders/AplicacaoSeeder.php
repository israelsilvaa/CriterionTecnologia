<?php

namespace Database\Seeders;

use App\Models\Aplicacoes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AplicacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //NX series 1
        $aplicacao = new Aplicacoes();
        $aplicacao->modelo_id = 1;
        $aplicacao->nome_aplicacao = 'PC, Notebook';
        $aplicacao->save();
        
        //Sata 2.5pl 2
        $aplicacao = new Aplicacoes();
        $aplicacao->modelo_id = 2;
        $aplicacao->nome_aplicacao = 'PC, Notebook, consoles';
        $aplicacao->save();
        
        //nv3000 3
        $aplicacao = new Aplicacoes();
        $aplicacao->modelo_id = 3;
        $aplicacao->nome_aplicacao = 'PC, Notebook';
        $aplicacao->save();
    }
}
