<?php

namespace App\Http\Controllers;

use App\Models\Usuario as Usuario;
use App\Models\Usuario as UsuarioModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Titulo as TituloModel;

class Titulo extends Controller
{
    public function adicionarTitulo(Request $request): RedirectResponse {
        TituloModel::create($request->all());
        return redirect()->route('titulo.listar');
    }

    public function formularioNovoTitulo() : View {
        return view('administrador.titulos.adicionarTitulo',[
            'Usuario' => UsuarioModel::where('codigoUsuario',session('codigo_usuario'))->first(),
            'TituloEditar' => new TituloModel(),
        ]);
    }

    public function editarTitulo(TituloModel $titulo) : View {
        return view('administrador.titulos.editarTitulo',[
            'Usuario' => UsuarioModel::where('codigoUsuario',session('codigo_usuario'))->first(),
            'TituloEditar' => $titulo,
        ]);
    }

    public function gravaEditarTitulo(Request $request, TituloModel $titulo) : RedirectResponse{
        $titulo->fill($request->all())->save();
        return redirect()->route('titulo.listar');
    }

    public function excluirTitulo (TituloModel $Titulo) : RedirectResponse {
        try {
            $Titulo->delete();
        }
        catch (\Exception $exception){
            return redirect()->route('titulo.listar')->with('message', 'Ops... Este livro possui reserva e não pode ser excluído até que ela seja finalizada!');
        }

        return redirect()->route('titulo.listar');
    }

    public function listarTitulo (): View {
        return view('administrador.titulos.listarTitulos',[
            'Usuario' => Usuario::where('codigoUsuario',session('codigo_usuario'))->first(),
            'titulos' => TituloModel::all()
        ]);
    }
}
