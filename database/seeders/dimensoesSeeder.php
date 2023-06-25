<?php

namespace Database\Seeders;

use App\Models\Dimensoes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class dimensoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         //NX series 1
         $dimensoes = new dimensoes();
         $dimensoes->altura = 22;
         $dimensoes->largura = 80;
         $dimensoes->profundidade = 2.1;
         $dimensoes->unidade_medida = 'mm';
         $dimensoes->save();
        
         //NV3000 
         $dimensoes = new dimensoes();
         $dimensoes->altura = 22;
         $dimensoes->largura = 80;
         $dimensoes->profundidade = 2.9;
         $dimensoes->unidade_medida = 'mm';
         $dimensoes->save();
 
         //sata 2.5pl 2
         $dimensoes = new dimensoes();
         $dimensoes->altura = 10;
         $dimensoes->largura = 70;
         $dimensoes->profundidade = 7;
         $dimensoes->unidade_medida = 'mm';
         $dimensoes->save();
    }
}
