@extends('layoutAdministrador.menuLateral')
@section('conteudo')
    <div class="card blue-grey lighten-5 hoverable">
        <div class="card-content">
            <div class="row">
                <div class="col m9">
                    <span class="card-title black-text">Títulos listar</span>
                </div>
                <div class="col m3">
                    <a class="btn blue btn-small" href="{{ Route('titulo.adicionar') }}">Adicionar</a>
                </div>
            </div>
            <div class="row">
                @if(session()->has('message'))
                    <div class="center"><span class="black-text">{{ session()->get('message') }}</span></div>
                @endif
            </div>
            <table>
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Autor</th>
                    <th class="center">Ação</th>
                </tr>
                </thead>
                <tbody>
                @foreach($titulos as $titulo)
                    <tr>
                        <td>{{$titulo->titulo}}</td>
                        <td>{{$titulo->descricao}}</td>
                        <td>{{$titulo->autor}}</td>
                        <td>
                            <form method="POST" id="form_excluir" action="{{route('titulo.excluir', ['Titulo' => $titulo])}}" class="form">
                                <input name="_method" type="hidden" value="DELETE">
                                {{ csrf_field() }}
                                <a class="btn blue btn-small" href="{{ Route('titulo.editar', ['titulo' => $titulo]) }}">Alterar</a>
                                <input type="submit" value="Excluir" class="btn red btn-small" />
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
