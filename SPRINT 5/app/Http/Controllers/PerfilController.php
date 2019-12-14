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
    public function editar()
    {
        $usuario = Auth::user();

        
        return view('/editar', compact('usuario'));
    }
    public function guardar(Request $req)
    {
        $usuario = Auth::user();

        $usuario-> nombre = $req["nombre"];
        $usuario-> apellido = $req["apellido"];
        $usuario-> email = $req["email"];
        $usuario-> fecha_nac = $req["fecha_nac"];
        $usuario-> localidad = $req["localidad"];
        $usuario-> provincia = $req["provincia"];
        $usuario-> cp = $req["cp"];
        $usuario-> direccion = $req["direccion"];

        $usuario->save();

        
        return view('/perfil', compact('usuario'));
    }

   
}