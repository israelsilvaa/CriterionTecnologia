<?php

namespace Database\Seeders;

use App\Models\Tipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //sata 2.5pl 2
        $tipo2 = new Tipo();
        $tipo2->nome_tipo = 'Sata III';
        $tipo2->save();

        //NVMe
        $tipo = new Tipo();
        $tipo->nome_tipo = 'NVMe M.2';
        $tipo->save();

    }
}
