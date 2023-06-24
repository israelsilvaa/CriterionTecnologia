<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dimensoes extends Model
{
    use HasFactory;
    protected $table = 'dimensoes';
    protected $fillable = ['altura', 'largura', 'profundidade', 'unidade_medida'];

}
