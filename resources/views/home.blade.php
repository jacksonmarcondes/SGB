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
<div class="valign-wrapper row login-box">

    <div class="col s10 pull-s1 m6 pull-m3 l3 pull-l5">
        <div class="card blue-grey lighten-5 hoverable">
            <div class="card-content white-text">
                <span class="card-title center"><img src="{{asset ('assets/images/Livro.png')}}" alt="Livro"/></span>

                <div class="row">
                    @if(session()->has('message'))
                        <div class="center"><span class="red-text">{{ session()->get('message') }}</span></div>
                    @endif
                </div>
                <form method="POST" action="/login">
                    @csrf
                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="Digite seu e-mail" id="email" name="email" required type="email" class="validate">
                            <label for="email">E-mail</label>
                        </div>
                        <div class="input-field col s12">
                            <input placeholder="Digite sua senha" id="senha" name="senha" required type="password" class="validate">
                            <label for="password">Senha</label>
                        </div>
                        <div class="col s12">
                            <button class="btn btn-login waves-effect waves-light blue-grey lighten-5 z-depth-3" type="submit" name="tipo_acesso" value="usuario"  style="color:#536dfe;">ACESSAR</button>
                            <br>
                            <br>
                            <button class="btn btn-login waves-effect waves-light blue-grey lighten-5 z-depth-3" type="submit" name="tipo_acesso" value="administrador" style="color:#536dfe;">ACESSAR PORTAL ADM</button>
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>

<script type="text/javascript" src="{{asset ('js/app.js')}}"></script>
<script type="text/javascript" src="{{asset ('assets/js/materialize.min.js')}}"></script>
</body>
</html>
