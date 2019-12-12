<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Usuario;
use App\Productos;

class PruebaController extends Controller
{
    public function listadoFitness()
    {
        $productos = Fitness::all();
        // dd($pelis);
        
        return view('prueba', compact('productos'));
    }

   
}