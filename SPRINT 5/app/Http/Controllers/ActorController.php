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

    public function nuevo()
    {
        return view('actorsadd');
    }
    public function edit($id)
    {
        $actor = Actor::find( $id );

        $vars = compact('actor');

        return view('actoredit', $vars);
    }
    public function store(Request $req)
    {
        $actor = new Actor();
        $actor->first_name = $req['first_name'];
        $actor->last_name = $req['last_name'];
        $actor->rating = $req['rating'];

        $actor->save();

        return redirect("/actores");
    }
    public function update(Request $req , $id)
    {
        $actor = Actor::find( $id );
        // dd($actor);
        $actor->first_name = $req['first_name'];
        $actor->last_name = $req['last_name'];
        $actor->rating = $req['rating'];

        $actor->save();

        return redirect("/actor/$id");
    }
}
