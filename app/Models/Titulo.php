<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titulo extends Model
{
    protected $table = 'Titulo';
    public $primaryKey = 'codigoLivro';
    public $timestamps = false;
    protected $fillable = [
        'autor',
        'descricao',
        'titulo'
    ];
}
