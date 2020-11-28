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
    <div class="col m1">
        <div class="card transparent z-depth-0" >
            <div class="card-content white-text right-align">
                <p>
                    <br>
                    <img src="{{asset ('assets/images/Livro.png')}}" height="50px" width="50px" alt="Livro"/>
                </p>
            </div>
        </div>

    </div>
    <div class="col m6">
        <div class="card transparent z-depth-0">
            <div class="card-content white-text">
                <p>
                <h4>Bem vindo, {{$Usuario->nome}}</h4>
                </p>
            </div>
        </div>

    </div>
    <div class="col m5">
        <br>
        <div class="card blue-grey lighten-5 hoverable" >

            <div class="card-content white-text">
                <div class="row">
                    <div class="col m5 black-text center">
                        Você possui R$ {{number_format($multa,2,",",".")}} em multas por atraso
                    </div>
                    <div class="col m7 right-align">
                        <button class="btn blue"> Alterar dados</button>
                        <a class="btn red" href="/"> Sair</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>


<div class=" row">

    <div class="col s12">
        @yield('conteudo')
    </div>
</div>

<script type="text/javascript" src="{{asset ('js/app.js')}}"></script>
<script type="text/javascript" src="{{asset ('assets/js/materialize.min.js')}}"></script>
</body>
</html>
