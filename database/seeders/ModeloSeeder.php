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
        $modelo->nome_produto = 'KingSpec NVMe 256gb';
        $modelo->nome_modelo = 'NX-256GB';
        $modelo->marca_id = 1;
        $modelo->tipo_id = 2;
        $modelo->capacidade_id = 1;
        $modelo->velocidade_id = 4;
        $modelo->aplicacao_id = 1;
        $modelo->geracao_id = 2;
        $modelo->dimensoes_id = 1;
        $modelo->preco = 190;
        $modelo->imagem_card = "modelos/g5EjRv0mTRPKcWJy1COXb46ktNBwqA3kOoRvfyaQ.png";
        $modelo->save();

        $modelo = new Modelo();
        $modelo->nome_produto = 'KingSpec NVMe 512gb';
        $modelo->nome_modelo = 'NX-512GB';
        $modelo->marca_id = 1;
        $modelo->tipo_id = 1;
        $modelo->capacidade_id = 3;
        $modelo->velocidade_id = 4;
        $modelo->aplicacao_id = 1;
        $modelo->geracao_id = 2;
        $modelo->dimensoes_id = 1;
        $modelo->preco = 220;
        $modelo->imagem_card = "modelos/g5EjRv0mTRPKcWJy1COXb46ktNBwqA3kOoRvfyaQ.png";
        $modelo->save();

        $modelo = new Modelo();
        $modelo->nome_produto = 'KingSpec NVMe 1tb';
        $modelo->nome_modelo = 'NX-1TB';
        $modelo->marca_id = 1;
        $modelo->tipo_id = 1;
        $modelo->capacidade_id = 4;
        $modelo->velocidade_id = 4;
        $modelo->aplicacao_id = 1;
        $modelo->geracao_id = 2;
        $modelo->dimensoes_id = 1;
        $modelo->preco = 400;
        $modelo->imagem_card = "modelos/g5EjRv0mTRPKcWJy1COXb46ktNBwqA3kOoRvfyaQ.png";
        $modelo->save();
        
        // $modelo2->nome_modelo = 'Sata 2.5"';
        $modelo = new Modelo();
        $modelo->nome_produto = 'KingSpec Sata 256gb';
        $modelo->nome_modelo = 'P3-256GB';
        $modelo->marca_id = 1;
        $modelo->tipo_id = 1;
        $modelo->capacidade_id = 1;
        $modelo->velocidade_id = 1;
        $modelo->aplicacao_id = 2;
        $modelo->geracao_id = 1;
        $modelo->dimensoes_id = 3;
        $modelo->preco = 130;
        $modelo->imagem_card = "modelos/EuPdLApqrpUBy2BdmFfghtZcwU5gWf5Uv317lWJ2.png";
        $modelo->save();
        
        $modelo = new Modelo();
        $modelo->nome_produto =  'KingSpec Sata 512gb';
        $modelo->nome_modelo = 'P3-512GB';
        $modelo->marca_id = 1;
        $modelo->tipo_id = 1;
        $modelo->capacidade_id = 3;
        $modelo->velocidade_id = 2;
        $modelo->aplicacao_id = 1;
        $modelo->geracao_id = 1;
        $modelo->dimensoes_id = 3;
        $modelo->preco = 200;
        $modelo->imagem_card = "modelos/EuPdLApqrpUBy2BdmFfghtZcwU5gWf5Uv317lWJ2.png";
        $modelo->save();

        $modelo = new Modelo();
        $modelo->nome_produto =  'KingSpec Sata 1tb';
        $modelo->nome_modelo = 'P3-1TB';
        $modelo->marca_id = 1;
        $modelo->tipo_id = 1;
        $modelo->capacidade_id = 4;
        $modelo->velocidade_id = 3;
        $modelo->aplicacao_id = 2;
        $modelo->geracao_id = 1;
        $modelo->dimensoes_id = 3;
        $modelo->preco = 380;
        $modelo->imagem_card = "modelos/EuPdLApqrpUBy2BdmFfghtZcwU5gWf5Uv317lWJ2.png";
        $modelo->save();
        
        //Netac 1
        // $modelo->nome_modelo = 'NV3000';
        $modelo = new Modelo();
        $modelo->nome_produto = 'Netac NVMe 500gb';
        $modelo->nome_modelo = 'NV-3000-500GB';
        $modelo->marca_id = 2;
        $modelo->tipo_id = 2;
        $modelo->capacidade_id = 2;
        $modelo->velocidade_id = 5;
        $modelo->aplicacao_id = 1;
        $modelo->geracao_id = 2;
        $modelo->dimensoes_id = 2;
        $modelo->preco = 250;
        $modelo->imagem_card = "modelos/aW7VNJWp8EfZpksNT0AiUGSOkGSL0wtaJFA7YxRt.png";
        $modelo->save();

        $modelo = new Modelo();
        $modelo->nome_produto = 'Netac NVMe 1tb';
        $modelo->nome_modelo = 'NV-3000-1TB';
        $modelo->marca_id = 2;
        $modelo->tipo_id = 2;
        $modelo->capacidade_id = 4;
        $modelo->velocidade_id = 5;
        $modelo->aplicacao_id = 1;
        $modelo->geracao_id = 2;
        $modelo->dimensoes_id = 2;
        $modelo->preco = 580;
        $modelo->imagem_card = "modelos/aW7VNJWp8EfZpksNT0AiUGSOkGSL0wtaJFA7YxRt.png";
        $modelo->save();

    }
}
