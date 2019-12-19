<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActorController extends Controller
{
    public function directory()
    {

        $actores = Actor::paginate(5);

        $vars = compact('actores');

        return view('actores', $vars);
    }

    public function show($id)
    {
        $actor = Actor::find( $id );

        $vars = compact('actor');

        return view('actor', $vars);
    }

    public function search(  )
    {
        $buscar = $_GET['texto'];

        $actores = Actor::where( 'first_name', 'like', "%$buscar%")
           ->orWhere('last_name', 'like', "%$buscar%")
           ->get();

        $vars = compact('actores');

        return view('actores', $vars);
    }
}
