<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;

class PeliculaController extends Controller
{
    public function listado()
    {
        // $pelis = [
        //     ['Peli uno', 3],
        //     ['Peli dos', 5],
        //     ['Peli tres', 4],
        //     ['Peli cutro', 5],
        //     ['Peli cinco', 43],
        // ];
        $pelis = Pelicula::all();
        dd($pelis);
        $vars = compact('pelis');
        return view('peliculas', $vars);
    }

    public function detalle($id)
    {
        $peli = Pelicula::find($id);

        $vars = compact('peli');
        return view('pelicula', $vars);
    }
    public function top($id)
    {
        $pelis = Pelicula::where('rating', '>', 5)->get();

        $vars = compact('pelis');
        return view('peliculas', $vars);
    }

    public function paginado($page = 1)
    {
        $pelis = Pelicula::paginate(5);
        // dd($pelis);
        $vars = compact('pelis');
        return view('peliculas', $vars);
    }
}
