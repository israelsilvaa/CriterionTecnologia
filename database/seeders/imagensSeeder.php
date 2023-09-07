<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\imagem;
class imagensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         //KingSpec 1
         $imagen = new imagem();
         $imagen->modelo_id = 1;
         $imagen->imagem_card = "modelos/g5EjRv0mTRPKcWJy1COXb46ktNBwqA3kOoRvfyaQ.png";
         $imagen->imagem_1 = "modelos/nx1.jpg";
         $imagen->imagem_2 = "modelos/nx2.jpg";
         $imagen->imagem_3 = "modelos/nx3.jpg";
         $imagen->imagem_4 = "modelos/nx4.jpg";
         $imagen->save();
 
         $imagen = new imagem();
         $imagen->modelo_id = 2;
         $imagen->imagem_card = "modelos/g5EjRv0mTRPKcWJy1COXb46ktNBwqA3kOoRvfyaQ.png";
         $imagen->imagem_1 = "modelos/nx1.jpg";
         $imagen->imagem_2 = "modelos/nx2.jpg";
         $imagen->imagem_3 = "modelos/nx3.jpg";
         $imagen->imagem_4 = "modelos/nx4.jpg";
         $imagen->save();
 
         $imagen = new imagem();
         $imagen->modelo_id = 3;
         $imagen->imagem_card = "modelos/g5EjRv0mTRPKcWJy1COXb46ktNBwqA3kOoRvfyaQ.png";
         $imagen->imagem_1 = "modelos/nx1.jpg";
         $imagen->imagem_2 = "modelos/nx2.jpg";
         $imagen->imagem_3 = "modelos/nx3.jpg";
         $imagen->imagem_4 = "modelos/nx4.jpg";
         $imagen->save();
         
         // $modelo2->nome_modelo = 'Sata 2.5"';
         $imagen = new imagem();
         $imagen->modelo_id = 4;
         $imagen->imagem_card = "modelos/EuPdLApqrpUBy2BdmFfghtZcwU5gWf5Uv317lWJ2.png";
         $imagen->imagem_1 = "modelos/sata1.jpg";
         $imagen->imagem_2 = "modelos/sata2.jpg";
         $imagen->imagem_3 = "modelos/sata3.jpg";
         $imagen->imagem_4 = "modelos/sata4.jpg";
         $imagen->save();

         $imagen = new imagem();
         $imagen->modelo_id = 5;
         $imagen->imagem_card = "modelos/EuPdLApqrpUBy2BdmFfghtZcwU5gWf5Uv317lWJ2.png";
         $imagen->imagem_1 = "modelos/sata1.jpg";
         $imagen->imagem_2 = "modelos/sata2.jpg";
         $imagen->imagem_3 = "modelos/sata3.jpg";
         $imagen->imagem_4 = "modelos/sata4.jpg";
         $imagen->save();
 
         $imagen = new imagem();
         $imagen->modelo_id = 6;
         $imagen->imagem_card = "modelos/EuPdLApqrpUBy2BdmFfghtZcwU5gWf5Uv317lWJ2.png";
         $imagen->imagem_1 = "modelos/sata1.jpg";
         $imagen->imagem_2 = "modelos/sata2.jpg";
         $imagen->imagem_3 = "modelos/sata3.jpg";
         $imagen->imagem_4 = "modelos/sata4.jpg";
         $imagen->save();
         
         //Netac 1
         // $modelo->nome_modelo = 'NV3000';
         $imagen = new imagem();
         $imagen->modelo_id = 7;
         $imagen->imagem_card = "modelos/aW7VNJWp8EfZpksNT0AiUGSOkGSL0wtaJFA7YxRt.png";
         $imagen->imagem_1 = "modelos/nt1.jpg";
         $imagen->imagem_2 = "modelos/nt2.jpg";
         $imagen->imagem_3 = "modelos/nt3.jpg";
         $imagen->save();
         
         $imagen = new imagem();
         $imagen->modelo_id = 8;
         $imagen->imagem_card = "modelos/aW7VNJWp8EfZpksNT0AiUGSOkGSL0wtaJFA7YxRt.png";
         $imagen->imagem_1 = "modelos/nt1.jpg";
         $imagen->imagem_2 = "modelos/nt2.jpg";
         $imagen->imagem_3 = "modelos/nt3.jpg";
         $imagen->save();
    }
}
