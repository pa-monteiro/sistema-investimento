<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <title>Login | Investindo </title>
</head>
<body>
    <div class="background"></div>
        <section id="conteudo-view" class="login">
            <h1>Investindo</h1>
            <h3>O nosso gerenciador de investimento</h3>

            {!! Form::open(['method' => 'post']) !!}
            <p>Acesse o sistema</p>

            <label> {!! Form::text('username', null, ['class' => 'input', 'placeholder' => 'Usuário']) !!}</label>
            <label> {!! Form::password('password', ['placeholder' => 'Senha']) !!}</label>

            {!! Form::submit('Entrar') !!}
            {!! Form::close() !!}

        </section>
</body>
</html>