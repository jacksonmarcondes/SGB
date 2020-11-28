<?php

namespace App\Http\Controllers;

use App\Models\Reserva as Reserva;
use App\Models\Reserva as ReservaModel;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Usuario as UsuarioModel;
use Illuminate\Contracts\View\View;
use App\Models\Titulo as Titulo;

class Usuario extends Controller
{
    public function adicionarUsuario(Request $request) : RedirectResponse {
        UsuarioModel::create(
            [
                'tipo'=> $request->tipo,
                'nome'=> $request->nome,
                'senha'=> md5($request->senha),
                'email'=> $request->email,
            ]
        );
        return redirect()->route('usuario.listar');
    }

    public function formularioNovoUsuario() : View {
        return view('administrador.usuarios.adicionarUsuario',[
            'Usuario' => UsuarioModel::where('codigoUsuario',session('codigo_usuario'))->first(),
            'UsuarioEditar' => new UsuarioModel(),
        ]);
    }

    public function editarUsuario(UsuarioModel $usuario) : View{
        return view('administrador.usuarios.editarUsuario',[
            'Usuario' => UsuarioModel::where('codigoUsuario',session('codigo_usuario'))->first(),
            'UsuarioEditar' => $usuario,
        ]);
    }

    public function gravaEditarUsuario(Request $request, UsuarioModel $usuario) : RedirectResponse{
        $usuario->fill(
            [
                'tipo'=> $request->tipo,
                'nome'=> $request->nome,
                'senha'=> md5($request->senha),
                'email'=> $request->email,
            ]
        )->save();
        return redirect()->route('usuario.listar');
    }

    public function inativarUsuario(Request $request, UsuarioModel $usuario) : RedirectResponse {
        $usuario->fill(
            [
                'ativo'=> !$usuario->ativo,
            ]
        )->save();
        return redirect()->route('usuario.listar')->with('message', ($usuario->ativo) ? 'Usuário reativado com sucesso!' : 'Usuário desativado com sucesso!');
    }

    public function listarUsuario() : View {
        return view('administrador.usuarios.listarUsuarios',[
            'Usuario' => UsuarioModel::where('codigoUsuario',session('codigo_usuario'))->first(),
            'Usuarios' => UsuarioModel::all(),
        ]);

    }

    public function login (Request $request) : RedirectResponse {
        $usuario = UsuarioModel::where('email','=', $request->email)->where('senha','=',md5($request->senha))->first();

        if ($usuario == null)
            return redirect()->route('index')->with('message', 'Ops... Usuário ou senha incorreto!');

        if ($usuario->tipo != $request->tipo_acesso)
            return redirect()->route('index')->with('message', 'Ops... Você tentou acessar uma página que não corresponde ao seu perfil!');

        if (!$usuario->ativo)
            return redirect()->route('index')->with('message', 'Ops... Seu usuário está inativo!');

        session(['codigo_usuario' => $usuario->codigoUsuario]);
        return redirect()->route('home');
    }

    public function home(Request $request) : View {
        $usuario = UsuarioModel::find(session('codigo_usuario'));
        $dataHoraAtual = Carbon::now();
        $multa = 0;
        $reservasEmAtraso = ReservaModel::whereHas('Emprestimo', function ($q) {
            $q->where('dataPrevista', '<', Carbon::now());
        })->where('usuario', session('codigo_usuario'))->pluck('dataReserva');

        if ($reservasEmAtraso->count() > 0) {
           foreach ($reservasEmAtraso as $reservaEmAtraso){
               $reservaAtual = Carbon::create($reservaEmAtraso);
               $multa += $reservaAtual->diff($dataHoraAtual)->days;
           }
        }

        return ($usuario->tipo == 'administrador') ? view('administrador.reservas.listarReservas',[
            'Usuario' => $usuario,
            'reservas' => ReservaModel::all()
        ]) : view('usuario.home',[
            'Usuario' => $usuario,
            'multa' => $multa,
            'titulosDisponiveis' => Titulo::whereNotIn('codigoLivro',Reserva::all()->pluck('titulo'))->get(),
        ]);
    }

}
