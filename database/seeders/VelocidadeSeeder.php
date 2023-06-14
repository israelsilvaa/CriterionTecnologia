<?php

namespace Database\Seeders;

use App\Models\Velocidade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VelocidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //NX series 1
        $velovidade = new Velocidade();
        $velovidade->modelo_id = 1;
        $velovidade->leitura = '3200mb/s';
        $velovidade->escrita = '2800mb/s';
        $velovidade->save();

        //sata 2.5pl
        $velovidade = new Velocidade();
        $velovidade->modelo_id = 2;
        $velovidade->leitura = '550mb/s';
        $velovidade->escrita = '450mb/s';
        $velovidade->save();

        //nv3000
        $velovidade = new Velocidade();
        $velovidade->modelo_id = 3;
        $velovidade->leitura = '3100mb/s';
        $velovidade->escrita = '3000mb/s';
        $velovidade->save();
    }
}
