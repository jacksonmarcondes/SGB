@extends('layoutAdministrador.master')
@section('menuLateral')
    <div class="card blue-grey lighten-5 hoverable">
        <div class="card-content">
            <span class="card-title center black-text">Menu</span>
            <table>
                <thead>
                <tr>
                    <th>Títulos</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>
                        <a href="/titulos/listar">- Listar</a>
                    </td>
                </tr>
                </tbody>
            </table>
            <table>
                <thead>
                <tr>
                    <th>Usuários</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><a href="/usuarios/listar">- Listar</a></td>
                </tr>
                </tbody>
            </table>
            <table>
                <thead>
                <tr>
                    <th>Reservas</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><a href="/reservas/listar">- Listar</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
