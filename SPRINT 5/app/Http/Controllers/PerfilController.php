<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Productos;

class PerfilController extends Controller
{
    public function mostrar()
    {
        $usuario = Auth::user();

        
        return view('/perfil', compact('usuario'));
    }

   
}