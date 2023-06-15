<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Modelo;

class ModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //KingSpec 1
        $modelo = new Modelo();
        $modelo->marca_id = 1;
        $modelo->nome_modelo = 'NX Series';
        $modelo->save();
        
        $modelo2 = new Modelo();
        $modelo2->marca_id = 1;
        $modelo2->nome_modelo = 'Sata 2.5"';
        $modelo2->save();
        
        //Netac 1
        $modelo3 = new Modelo();
        $modelo3->marca_id = 2;
        $modelo3->nome_modelo = 'NV3000';
        $modelo3->save();

    }
}
