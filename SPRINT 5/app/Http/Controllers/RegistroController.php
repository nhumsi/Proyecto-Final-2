<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;



class RegistroController extends Controller
{
    public function guardar(Request $req)
    {
        $cond = [
            "nombre_usuario" => "string|min:5|unique",
            "pass" => "string|min:6",
            "email" =>  "email|unique",
            "nombre" => "string|min:2",
            "apellido" => "string|min:2",
            "cp" =>"numeric|size:4",
        ];

        $msj = [
            "string" => "El campo :attribute no debe estar vacío",
            "min" => "El campo :attribute debe tener un  mínimo de :min",
            "numeric"=> "El codigo postal debe ser un numero",
            "size"=> "El codigo postal debe tener :size numeros",
            "unique" => "El campo :attribute ya se encuentra en uso"
        ];


        $this->validate($req, $cond, $msj);

        

        $usuarioNuevo = new Usuario();
        
        $usuarioNuevo-> nombre_usuario = $req["nombre-usuario"];
        $usuarioNuevo-> pass = Hash::make($req["password"]);
        $usuarioNuevo-> email = $req["email"];
        $usuarioNuevo-> nombre = $req["nombre"];
        $usuarioNuevo-> apellido = $req["apellido"];
        $usuarioNuevo-> fecha_nac = $req["fecha-nac"];
        $usuarioNuevo-> provincia = $req["provincia"];
        $usuarioNuevo-> cp = $req["cp"];
        $usuarioNuevo-> direccion = $req["direccion"];

        $usuarioNuevo->save();
        
        return redirect('/index');
    }
}
