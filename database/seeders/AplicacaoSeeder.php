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
        //NVMe
        $aplicacao = new Aplicacoes();
        $aplicacao->nome_aplicacao = 'PC, Notebook';
        $aplicacao->save();
        
        //Sata 3
        $aplicacao = new Aplicacoes();
        $aplicacao->nome_aplicacao = 'PC, Notebook, consoles, cases 2.5"';
        $aplicacao->save();
    }
}
