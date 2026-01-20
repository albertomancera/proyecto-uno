<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    hola soy la cabecera común (barra de navegacion, etc)
    {{-- @yield('content') es un marcador de posición. Aquí se inyectará el contenido definido en la sección 'content' de las vistas hijas que extiendan este layout. --}}
    @yield('content')

    Hola soy el template 
</body>
</html>