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
    <!-- Ejemplo sin Plantilla Blade, php plano -->
    <h1><?= e($title) ?></h1>
    
    <!-- Ejemplo de Plantilla Blade -->
    <h1>{{ $title }}</h1>
    
    <!-- Ejemplo sin Plantilla Blade, php plano -->
    <ul>
        <?php foreach ($users as $user):?>
            <li><?= e($user) ?></li>
        <?php endforeach; ?>
    </ul>

    <!-- Ejemplo sin Plantilla Blade,condicionales -->
    <ul>
        @forelse ($users as $user)
            <li>{{ $user }}</li>
        @empty
            <li>No hay Usuarios Registrados</li>
        @endforelse
    </ul>
   
    <!-- Ejemplo de Plantilla Blade condicional @if
    @if (! empty($users))
        <ul>
            @foreach ($users as $user)
                <li>{{ $user }}</li>
            @endforeach
        </ul>
    @else ()
        <p>No hay Usuarios Registrados</p>
    @endif
    -->

    <!-- Otro ejemplo de condicional @unless
            @unelss (empty($users))
        <ul>
            @foreach ($users as $user)
                <li>{{$user}}</li>
            @endforeach
        </ul>
    @else ()
        <p>No hay Usuarios Registrados</p>
    @endunelss

     -->
    <!-- Otro ejemplo de condicional con @empty
            @empty($users)
        <p>No hay Usuarios Registrados</p>
    @else ()
        <ul>
            @foreach ($users as $user)
                <li>{{$user}}</li>
            @endforeach
        </ul>
    @endempty

     -->

</body>
</html>