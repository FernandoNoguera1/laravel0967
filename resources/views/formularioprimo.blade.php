<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <h1>El número {{ $numero }} {{ $esPrimo ? 'es' : 'no es' }} primo.</h1>
    <a href="{{route('primo.formulario')}}">Volver a intentar</a>

    <button>
        <a class="nav-link" href="pagina">EJERCICIOS</a>
    </button>
</body>

</html>
