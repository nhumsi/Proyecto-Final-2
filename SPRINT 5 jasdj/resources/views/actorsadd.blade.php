<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Nuevo Actor</title>
</head>
<body>
    
    <form action="/actors/add" method="post">
    @csrf
    <p>
        <label for="">Nombre</label>
        <input type="text" name="first_name">
    </p>
    <p>
        <label for="">Apellido</label>
        <input type="text" name="last_name">
    </p>
    <p>
        <label for="">Rating</label>
        <input type="text" name="rating">
    </p>
        <button type="submit"> Guardar </button>
    </form>

</body>
</html>