<?php

namespace Database\Seeders;

use App\Models\Capacidade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CapacidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //NX series 1
        

        $capacidade = new Capacidade();
        $capacidade->modelo_id = 1;
        $capacidade->capacidade = '1TB';
        $capacidade->save();

        //sata 2.5pl 2
        $capacidade2 = new Capacidade();
        $capacidade2->modelo_id = 2;
        $capacidade2->capacidade = '256GB';
        $capacidade2->save();
        
        $capacidade2 = new Capacidade();
        $capacidade2->modelo_id = 2;
        $capacidade2->capacidade = '512GB';
        $capacidade2->save();

        $capacidade2 = new Capacidade();
        $capacidade2->modelo_id = 2;
        $capacidade2->capacidade = '1TB';
        $capacidade2->save();

        //nv3000 2
        $capacidade3 = new Capacidade();
        $capacidade3->modelo_id = 3;
        $capacidade3->capacidade = '500GB';
        $capacidade3->save();

        $capacidade3 = new Capacidade();
        $capacidade3->modelo_id = 3;
        $capacidade3->capacidade = '1TB';
        $capacidade3->save();
    }
}
