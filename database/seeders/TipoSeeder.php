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
        //NX series 1
        $tipo = new Tipo();
        $tipo->modelo_id = 1;
        $tipo->nome_tipo = 'NVMe M.2';
        $tipo->save();

        //sata 2.5pl 2
        $tipo2 = new Tipo();
        $tipo2->modelo_id = 2;
        $tipo2->nome_tipo = 'Sata III';
        $tipo2->save();

        //nv3000 2
        $tipo3 = new Tipo();
        $tipo3->modelo_id = 3;
        $tipo3->nome_tipo = 'NVMe M.2';
        $tipo3->save();
    }
}
