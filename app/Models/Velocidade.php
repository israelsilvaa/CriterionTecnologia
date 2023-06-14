<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Velocidade extends Model
{
    use HasFactory;
    protected $fillable = ['modelo_id', 'leitura', 'escrita'];
}
