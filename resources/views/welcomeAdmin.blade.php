<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{asset ('assets/css/materialize.min.css')}}" media="screen,projection">
    <link type="text/css" rel="stylesheet" href="{{asset ('css/app.css')}}" media="screen,projection">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body>
<div class=" row">

    <div class="col s3">
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
                        <td>- Listar</td>
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
                        <td>- Listar</td>
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
                        <td>- Listar</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col s9">
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
                    <tr>
                        <td>Código Limpo</td>
                        <td>Jackson Marcondes</td>
                        <td>Aguardando retirada</td>
                        <td class="center"><a class="waves-effect waves-light blue btn-small">Confirmar retirada</a></td>
                    </tr>
                    <tr>
                        <td>Alan</td>
                        <td>Jellybean</td>
                        <td>Retirado</td>
                        <td class="center"><a class="waves-effect waves-light green btn-small">Confirmar entrega</a></td>
                    </tr>
                    <tr>
                        <td>Alan</td>
                        <td>Jellybean</td>
                        <td>Devolvido</td>
                        <td class="center"></td>
                    </tr>
                    <tr>
                        <td>Jonathan</td>
                        <td>Lollipop</td>
                        <td>Atrasado</td>
                        <td class="center"><a class="waves-effect waves-light red btn-small">Adicionar multa</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{asset ('js/app.js')}}"></script>
<script type="text/javascript" src="{{asset ('assets/js/materialize.min.js')}}"></script>
</body>
</html>
