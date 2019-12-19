<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegistroController extends Controller
{
    public function guardar(Request $req)
    {
        $cond = [
            "name" => "string|required|min:5|unique:users,name",
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6',
            //"pass" => "required|confirmed|min:6",
            //'pass_conf' => 'required_with:password|same:pass|min:6'
            "email" =>  "required|email|unique:users,email",
            "nombre" => "required|string|min:2",
            "apellido" => "required|string|min:2",
            "cp" =>"required|string|size:4",
            "localidad" => "required|string|min:2",
            "direccion" => "required|string|min:2"
        ];

        $msj = [
            "string" => "El campo :attribute no debe estar vacío",
            "min" => "El campo :attribute debe tener un  mínimo de :min",
            "numeric"=> "El codigo postal debe ser un numero",
            "size"=> "El codigo postal debe tener :size numeros",
            "unique" => "El campo :attribute ya se encuentra en uso",
            "confirmed" => "Las contraseñas deben coincidir",
            "required" => "El campo :attribute no puede estar vacio",
            "same" => "Las contraseñas deben coincidir"
        ];


        $this->validate($req, $cond, $msj);

        

        $usuarioNuevo = new User;
        
        $usuarioNuevo-> name = $req["name"];
        $usuarioNuevo-> password = Hash::make($req['password']);
        $usuarioNuevo-> email = $req["email"];
        $usuarioNuevo-> nombre = $req["nombre"];
        $usuarioNuevo-> apellido = $req["apellido"];
        $usuarioNuevo-> fecha_nac = $req["fecha_nac"];
        $usuarioNuevo-> localidad = $req["localidad"];
        $usuarioNuevo-> provincia = $req["provincia"];
        $usuarioNuevo-> cp = $req["cp"];
        $usuarioNuevo-> direccion = $req["direccion"];

        $usuarioNuevo->save();

       
        
        return redirect('/index');
    }
}