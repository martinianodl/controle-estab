<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle de Estabelecimentos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/starstyle.css') }}">
</head>
<body>
@auth
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-2">
    <a class="navbar navbar-expand-lg" href="{{ route('listar_estab') }}">Home</a>
    <a href="/logout" class="text-danger">Sair</a>
</nav>
@endauth
<div class="container">
    <div class="jumbotron">
        <h1>@yield('cabecalho')</h1>
    </div>

    @yield('conteudo')
</div>
</body>
</html>
