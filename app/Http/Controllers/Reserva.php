<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Models\Usuario as Usuario;
use App\Models\Reserva as ReservaModel;
use App\Models\Titulo as Titulo;
use Illuminate\Support\Facades\Redirect;

class Reserva extends Controller
{
    public function reservarTitulo(Request $request) : RedirectResponse {
        $dataReserva = Carbon::now();
        $reserva = new ReservaModel([
            'usuario'=>$request->usuario,
            'titulo'=>$request->titulo,
            'dataReserva' => $dataReserva
        ]);
        $reserva->save();
        \Session::flash('message', 'Etapa apagada com sucesso!');
        \Session::flash('class', 'success');
        return redirect()->route('home')->with('message', 'Reserva realizada com sucesso!');
    }

    public function listarReservas(Request $request) : View {
        return view('administrador.reservas.listarReservas',[
            'Usuario' => Usuario::where('codigoUsuario',session('codigo_usuario'))->first(),
            'reservas' => ReservaModel::all()
        ]);
    }
}
