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
        //sata 3 256
        $velovidade = new Velocidade();
        $velovidade->leitura = '564mb/s';
        $velovidade->escrita = '483mb/s';
        $velovidade->save();
        
        //sata 3 512 
        $velovidade = new Velocidade();
        $velovidade->leitura = '563mb/s';
        $velovidade->escrita = '509mb/s';
        $velovidade->save();
        
        //sata 3 1tb
        $velovidade = new Velocidade();
        $velovidade->leitura = '561mb/s';
        $velovidade->escrita = '510mb/s';
        $velovidade->save();

        //NX series gen3x4
        $velovidade = new Velocidade();
        $velovidade->leitura = '3400mb/s';
        $velovidade->escrita = '3100mb/s';
        $velovidade->save();

        //nv3000 500 gen3x4
        $velovidade = new Velocidade();
        $velovidade->leitura = '3100mb/s';
        $velovidade->escrita = '2100mb/s';
        $velovidade->save();
    }
}
