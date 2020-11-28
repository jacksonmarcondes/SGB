@extends('layoutUsuario.master')
@section('conteudo')
    <div class="card blue-grey lighten-5 hoverable">
        <div class="card-content">
            <div class="row">
                <div class="col m12">
                    <span class="card-title black-text">Usuários editar</span>
                </div>

            </div>
            <div class="row">
                <form method="POST" action="{{Route('usuario.comum.gravarEdicao', ['usuario'=>$UsuarioEditar])}}">
                    <input name="_method" type="hidden" value="PUT">
                    @csrf
                    @include('usuario._form')
                </form>
            </div>
        </div>
    </div>
@endsection
