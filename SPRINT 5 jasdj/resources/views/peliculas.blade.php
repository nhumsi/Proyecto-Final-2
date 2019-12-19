@extends('base')



@section('title')
    Titulo
@endsection   


@section('contenido')   

    @parent
    
    <!-- {{  var_dump ($pelis) }} -->
    <h1> Listado </h1>
    <ul>
    <?php
        // foreach($pelis as $p) {
        //     echo "<li> $p </li>";
        // }
    ?>

    @foreach($pelis as $p) 
        <li>  {{ $p->title }} - rating : {{ $p->rating }}  </li>
    @endforeach

    </ul>

    {{ $pelis->links() }}
@endsection


    


