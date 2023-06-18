<?php

namespace Database\Seeders;

use App\Models\perfil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $perfil = new perfil();
        $perfil->perfil = 'admin';
        $perfil->save();

        $perfil = new perfil();
        $perfil->perfil = 'cliente';
        $perfil->save();
    }
}
