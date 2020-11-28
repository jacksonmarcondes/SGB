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
                <table>
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th class="center">Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($Usuarios as $usuario)
                        <tr>
                            <td>{{$usuario->nome}}</td>
                            <td>{{$usuario->email}}</td>
                            <td class="center">
                                <form method="POST" id="form_excluir" action="{{route('usuario.inativar', ['Usuario' => $usuario])}}" class="form">
                                    <input name="_method" type="hidden" value="POST">
                                    {{ csrf_field() }}
                                    <a class="btn blue btn-small" href="{{ Route('usuario.editar', ['usuario' => $usuario]) }}">Alterar</a>
                                    <input type="submit" value="Inativar" class="btn red btn-small" />
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
