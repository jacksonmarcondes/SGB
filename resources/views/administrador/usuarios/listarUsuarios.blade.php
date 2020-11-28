@extends('layoutAdministrador.menuLateral')
@section('conteudo')
    <div class="card blue-grey lighten-5 hoverable">
        <div class="card-content">
            <div class="row">
                <div class="col m9">
                    <span class="card-title black-text">Usuários listar</span>
                </div>
                <div class="col m3">
                    <a class="btn blue btn-small" href="{{ Route('usuario.adicionar') }}">Adicionar</a>
                </div>
            </div>
            <div class="row">
                @if(session()->has('message'))
                    <div class="center"><span class="black-text">{{ session()->get('message') }}</span></div>
                @endif
            </div>
            <div class="row">
                <table>
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Tipo</th>
                        <th class="center">Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($Usuarios as $usuario)
                        <tr>
                            <td>{{$usuario->nome}}</td>
                            <td>{{$usuario->email}}</td>
                            <td>{{$usuario->tipo == 'administrador' ? 'Administrador' : 'Usuário'}}</td>
                            <td class="center">
                                <form method="POST" id="form_excluir" action="{{route('usuario.inativar', ['usuario' => $usuario])}}" class="form">
                                    <input name="_method" type="hidden" value="PUT">
                                    {{ csrf_field() }}
                                    <a class="btn blue btn-small" href="{{ Route('usuario.editar', ['usuario' => $usuario]) }}">Alterar</a>
                                    <input type="submit" value="{{ $usuario->ativo ? 'Inativar' : 'Ativar'  }}" class="btn {{ $usuario->ativo ? 'red' : 'blue'  }} btn-small" />
                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
