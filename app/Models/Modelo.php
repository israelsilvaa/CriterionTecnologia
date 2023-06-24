<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;

    protected $fillable = ['marca_id', 'nome_modelo', 'preco', 'imagem_card'];

    public function marca(){
        return $this->belongsTo(Marca::class);
    }

}
