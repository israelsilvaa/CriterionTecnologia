<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Marca;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // instanciando um objeto
        // $marca = new Marca();
        // $marca->nome_marca = 'KingSpec';

        // o metodo create (atenção para o atributo $fillable  da classe)
        Marca::create(['nome_marca' => 'KingSpec']);
        Marca::create(['nome_marca' => 'Netac']);

        // insert
        // DB::table('marcas')->insert(['nome_marca'=>'KingSpec']);

    }
}
