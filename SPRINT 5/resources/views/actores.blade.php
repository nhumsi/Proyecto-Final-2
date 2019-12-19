<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title> asds dsd </title>
</head>
<body>

    <form method="get" action="/actores/buscar">
        <label for="buscar"> Buscar Actor</label>
        <input type="text" id="buscar" name="texto" placeholder="nombre del actor...">
        <button type="submit"> Buscar </button>
    </form>
    <h1>  Listado de Actores</h1>

    <ul>
        @foreach ($actores as $actor)
        <li> <a href="actor/{{ $actor->id }}"> {{ $actor->getNombreCompleto() }} </li>
        @endforeach
    </ul>


    {{ $actores->links() }}
</body>
</html>