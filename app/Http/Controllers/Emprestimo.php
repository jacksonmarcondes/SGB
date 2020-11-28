<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Emprestimo extends Controller
{


    public function emprestarTitulo(Reserva $reserva, $dataRetirada) : Emprestimo{

    }

    public function devolverTitulo(Emprestimo $emprestimo, $dataDevolucao) : void {

    }

    public function calcularMulta(Emprestimo $emprestimo) : float {

    }

    public function imprimirComprovantes(Emprestimo $emprestimo) : Emprestimo {

    }

}
