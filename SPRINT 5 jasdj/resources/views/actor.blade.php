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
    <h1>  Detalle de Actor</h1>

    <p>Nombre : {{ $actor->first_name }}</p>
    <p>Apellido : {{ $actor->last_name}}</p>
    <p> Rating  : {{ $actor->rating }}</p>
</body>
</html>