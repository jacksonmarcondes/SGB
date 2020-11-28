<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    protected $table = 'Emprestimo';
    public $primaryKey = 'reserva';
    public $timestamps = false;
    protected $fillable = [
        'dataPrevista',
        'dataEmprestimo',
        'dataDevolucao',
        'reserva'
    ];

    public function Reserva()
    {
        return $this->belongsTo('App\Models\Reserva', 'codigoReserva', 'reserva');
    }
}
