@extends('layoutUsuario.master')
@section('conteudo')
    <div class="valign-wrapper row">
        <div class="col s12">
            <div class="card blue-grey lighten-5 hoverable">
                <div class="card-content white-text">
                    <span class="card-title black-text">Títulos disponíveis para retirada</span>
                    <div class="row">
                        @if(session()->has('message'))
                            <span class="black-text">{{ session()->get('message') }}</span>
                        @endif
                    </div>
                    <div class="row">
                        @foreach($titulosDisponiveis as $titulo)
                            <div class="col s12 m4">
                                <div class="card blue-grey darken-3">
                                    <div class="card-content white-text">
                                        <span class="card-title">{{$titulo->titulo}}</span>
                                        <p>{{$titulo->descricao}}</p>
                                    </div>
                                    <div class="card-action">
                                        <span>Autor: {{$titulo->autor}}</span>
                                        <span class="right">
                                            <form method="POST" id="form_excluir" action="{{route('reserva.adicionar')}}" class="form">
                                    {{ csrf_field() }}
                                                <input type="hidden" name="usuario" value="{{$Usuario->codigoUsuario}}">
                                                <input type="hidden" name="titulo" value="{{$titulo->codigoLivro}}">
                                    <button class="btn blue btn-small" type="submit">Reservar</button>
                                </form>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
