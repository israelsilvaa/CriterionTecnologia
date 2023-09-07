<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imagem extends Model
{
    use HasFactory;
    protected $table = 'imagens';

    protected $fillable = ['modelo_id','imagen_card', 'imagen_1', 'imagen_2', 'imagen_3', 'imagen_4'];
}
