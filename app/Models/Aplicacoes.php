<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aplicacoes extends Model
{
    use HasFactory;
    protected $fillable = ['modelo_id', 'nome_aplicacao'];
}
