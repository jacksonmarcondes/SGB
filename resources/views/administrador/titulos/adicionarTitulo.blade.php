@extends('layoutAdministrador.menuLateral')
@section('conteudo')
    <div class="card blue-grey lighten-5 hoverable">
        <div class="card-content">
            <div class="row">
                <div class="col m12">
                    <span class="card-title black-text">Titulo adicionar</span>
                </div>

            </div>
            <div class="row">
                <form method="POST" action="{{Route('titulo.adicionar')}}">
                    @csrf
                    @include('administrador.titulos._form')
                </form>
            </div>
        </div>
    </div>
@endsection
