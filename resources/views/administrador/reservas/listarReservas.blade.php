@extends('layoutAdministrador.menuLateral')
@section('conteudo')
    <div class="card blue-grey lighten-5 hoverable">
        <div class="card-content">
            <span class="card-title black-text">Reservas listar</span>
            <table>
                <thead>
                <tr>
                    <th>Título</th>
                    <th>Nome</th>
                    <th>Status</th>
                    <th class="center">Ação</th>
                </tr>
                </thead>
                <tbody>
                @foreach($reservas as $reserva)
                    <tr>
                        <td>{{$reserva->Titulo->titulo}}</td>
                        <td>{{$reserva->Usuario->nome}}</td>
                        <td>teste</td>
                        <td>teste</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
