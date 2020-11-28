<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = 'Reserva';
    public $primaryKey = 'codigoReserva';
    public $timestamps = false;
    protected $fillable = [
        'usuario',
        'titulo',
        'dataReserva'
    ];

    public function Usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'codigoUsuario', 'usuario');
    }

    public function Titulo()
    {
        return $this->hasOne('App\Models\Titulo', 'codigoLivro', 'titulo');
    }

}
