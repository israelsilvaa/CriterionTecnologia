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
        $capacidade2 = new Capacidade();
        $capacidade2->capacidade = '256GB';
        $capacidade2->save();
        
        $capacidade3 = new Capacidade();
        $capacidade3->capacidade = '500GB';
        $capacidade3->save();
        
        $capacidade2 = new Capacidade();
        $capacidade2->capacidade = '512GB';
        $capacidade2->save();
        
        $capacidade3 = new Capacidade();
        $capacidade3->capacidade = '1TB';
        $capacidade3->save();
    }
}
