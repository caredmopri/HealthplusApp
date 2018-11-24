<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
            content="width-dvice-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Usuarios = Carmo.net</title>
</head>
<body>
    <!-- Ejemplo de Plantilla Blade -->
    <h1>{{ $title }}</h1>

    <!-- Ejemplo sin Plantilla Blade,condicionales -->
    <ul>
        @forelse ($users as $user)
            <li>{{ $user }}</li>
        @empty
            <li>No hay Usuarios Registrados</li>
        @endforelse
    </ul>

</body>
</html>
