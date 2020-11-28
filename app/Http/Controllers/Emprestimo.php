<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Emprestimo as EmprestimoModel;
use App\Models\Reserva as ReservaModel;

class Emprestimo extends Controller
{

    public function gravaEditarEmprestimo(Request $request, ReservaModel $reserva ) : RedirectResponse {
        $acaoEmprestimo = $request->acaoEmprestimo;
        $dataHoraAtual = Carbon::now();
        $comprovante = null;

        if($acaoEmprestimo == 'confirmarRetirada') {
            $this->emprestarTitulo($reserva, $dataHoraAtual);
            $comprovante = 'Retirada confirmada com sucesso!';
        }

        if($acaoEmprestimo == 'confirmarEntrega')
            $comprovante = $this->devolverTitulo($reserva);

        return redirect()->route('reserva.listar')->with('message', $comprovante);
    }

    public function emprestarTitulo(ReservaModel $reserva, $dataRetirada = null) : void {
        EmprestimoModel::where('reserva',$reserva->pluck('codigoReserva'))->update([
            'dataEmprestimo' => $dataRetirada,
        ]);
    }

    public function devolverTitulo(ReservaModel $reserva) : string {
        $comprovanteDevolucao = $this->imprimirComprovantes($reserva);
        EmprestimoModel::where('reserva',$reserva->pluck('codigoReserva'))->delete();
        $reserva->delete();

        return $comprovanteDevolucao;

    }

    public function imprimirComprovantes(ReservaModel $reserva) : string {
        $usuario = $reserva->Usuario()->get();
        $usuario->pluck('nome');
        $titulo = $reserva->Titulo()->get();
        $titulo->pluck('titulo');
        return 'O usuario '.$usuario[0]->nome.' devolveu o livro '.$titulo[0]->titulo.' em '.Carbon::now()->format('d/m/Y').' e pagou suas taxas. Por favor, oriente que ele tire um print dessa tela, assim não matamos árvores =D';
    }

}
