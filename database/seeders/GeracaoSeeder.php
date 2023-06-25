<?php

namespace Database\Seeders;

use App\Models\Geracao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeracaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //NX series 1
        $geracao = new Geracao();
        $geracao->geracao = 'SATA Rev. 3.0 (6Gb/s)';
        $geracao->save();
       
        //NX series 1
        $geracao = new Geracao();
        $geracao->geracao = 'gen3.0x4';
        $geracao->save();

        //sata 2.5pl 2
        $geracao = new Geracao();
        $geracao->geracao = 'gen4.0x4';
        $geracao->save();
    }
}
