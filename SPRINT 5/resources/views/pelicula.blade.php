
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peliciulas</title>
</head>
<body>
    <h1> Detalle </h1>
    <h2> Titutlo {{ $peli->title }} - rating {{ $peli->rating }} </h2>
    <p>
        Actores :
        <ul>
        @foreach( $peli->actores as $actor)
            <li> {{ $actor->getNombreCompleto() }} </li>
        @endforeach
        </ul>
    </p>
    <img src="/storage/Vs00XlgpCRNQS0xIqGFd5A55eQOb3yODEFfZEYFK.jpeg" alt="">

</body>
</html>

