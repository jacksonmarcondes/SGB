@extends('layoutAdministrador.menuLateral')
@section('conteudo')
    <div class="card blue-grey lighten-5 hoverable">
        <div class="card-content">
            <span class="card-title black-text">Reservas listar</span>
            <div class="row">
                @if(session()->has('message'))
                    <div class="center"><span class="black-text">{{ session()->get('message') }}</span></div>
                @endif
            </div>
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
                        <td>{{($reserva->Emprestimo->dataEmprestimo == null) ? 'Aguardando Retirada' : ((\Carbon\Carbon::create($reserva->Emprestimo->dataPrevista) <= \Carbon\Carbon::now()) ? 'Atrasado' : 'Retirado' ) }}</td>
                        <td class="center">
                            <form method="POST" id="form_excluir" action="{{route('emprestimo.gravarEdicao', ['reserva' => $reserva])}}" class="form">
                                <input name="_method" type="hidden" value="PUT">
                                <input name="acaoEmprestimo" type="hidden" value="{{($reserva->Emprestimo->dataEmprestimo == null) ? 'confirmarRetirada' :  'confirmarEntrega'  }}">
                                {{ csrf_field() }}
                            <input type="submit" value="{{($reserva->Emprestimo->dataEmprestimo == null) ? 'Confirmar Retirada' :  'Confirmar Entrega' }}" class="btn {{($reserva->Emprestimo->dataEmprestimo == null) ? 'blue' : 'green' }} btn-small" />
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
