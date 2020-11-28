<?php

namespace App\Http\Controllers;

use App\Models\Reserva as ReservaModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Usuario as UsuarioModel;
use Illuminate\Contracts\View\View;
use App\Models\Titulo as Titulo;

class Usuario extends Controller
{
    public function adicionarUsuario(Request $request) : RedirectResponse {
        UsuarioModel::create($request->all());
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
        $usuario->fill($request->all())->save();
        return redirect()->route('usuario.listar');
    }

    public function inativarUsuario(Usuario $usuario) : Usuario{

    }

    public function listarUsuario() : View {
        return view('administrador.usuarios.listarUsuarios',[
            'Usuario' => UsuarioModel::where('codigoUsuario',session('codigo_usuario'))->first(),
            'Usuarios' => UsuarioModel::all(),
        ]);

    }

    public function login (Request $request) : RedirectResponse {
        $usuario = UsuarioModel::where('email','=', $request->email)->where('senha','=',md5($request->senha))->first();
        if (!$usuario->codigoUsuario)
            redirect()->route('index');
        session(['codigo_usuario' => $usuario->codigoUsuario]);
        return redirect()->route('home');
    }

    public function home(Request $request){
        $usuario = UsuarioModel::find(session('codigo_usuario'));
        return ($usuario->tipo == 'administrador') ? view('administrador.reservas.listarReservas',[
            'Usuario' => $usuario,
            'reservas' => ReservaModel::all()
        ]) : view('usuario.home',[
            'Usuario' => $usuario,
            'titulosDisponiveis' => Titulo::all(),
        ]);

    }

}
