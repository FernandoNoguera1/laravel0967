<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>formulario cars</h1>
<form action="{{ route('cellphone.store') }}" method="POST" enctype="multipart/form-data">

    @csrf

    <label>
        Ingrese la marca del celular:
        <br>
        <input type="text" name="marca">
    </label>
    <br>
    <label>
        Ingrese su precio:
        <br>
        <input type="number" name="precio">
    </label>
    <br><br><br>

    <button type="submit">Enviar Formulario:</button>
</form>
</body>
</html>
