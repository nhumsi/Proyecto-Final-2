<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Nuevo Actor</title>
</head>
<body>
    
    <form action="/actor/{{ $actor->id }}" method="post">
    @csrf
    <p>
        <label for="">Nombre</label>
        <input type="text" name="first_name" value="{{ $actor->first_name }}">
    </p>
    <p>
        <label for="">Apellido</label>
        <input type="text" name="last_name" value="{{ $actor->last_name }}">
    </p>
    <p>
        <label for="">Rating</label>
        <input type="text" name="rating" value="{{ $actor->rating }}">
    </p>
        <button type="submit"> Guardar </button>

        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="id" value="{{ $actor->id }}">

    </form>

</body>
</html>