<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use App\Fitness;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class FitnessController extends Controller
{
    public function listadoFitness()
    {
        $productos = Fitness::all();
        // dd($pelis);

        return view('prueba', compact('productos'));
    }

    public function listado()
    {
      $fitness = Fitness::paginate(6);

      $vac = compact ('fitness');
      return view('fitness', $vac);
    }

    public function guardar(Request $req)
    {
        $cond = [
            "nombre" => "string|required|min:4",
            "color" => "required|string|min:2",
            "precio" => "numeric|min:1",
            "stock" => "numeric|min:1",
            "image" => "file"
        ];

        $msj = [
            "string" => "El campo :attribute no debe estar vacío",
            "min" => "El campo :attribute debe tener un  mínimo de :min",
            "numeric"=> "El campo :attribute debe ser un numero",
            // "size"=> "El stock debe tener :size numeros",
            // "unique" => "El campo :attribute ya se encuentra en uso",
            // "confirmed" => "Las contraseñas deben coincidir",
            "required" => "El campo :attribute no puede estar vacio",
        ];


        $this->validate($req, $cond, $msj);

        $productoNuevo = new Productos();

        $ruta = $req -> file ("image") -> store("public");
        $nombreArchivo = basename($ruta);

        $productoNuevo-> nombre = $req["nombre"];
        $productoNuevo-> color = $req["color"];
        $productoNuevo-> precio = $req["precio"];
        $productoNuevo-> stock = $req["stock"];
        $productoNuevo-> categoria = $req["categoria"];
        $productoNuevo-> image = $nombreArchivo;

        $productoNuevo->save();



        return redirect('/fitness');
    }

    public function detalleFitness($id)
    {
        $producto = Fitness::find($id);

        return view('detalle', compact('producto'));
    }

    public function buscar()
    {
        $buscar = $_GET['texto'];

        $producto = Productos::find($buscar);

        $vars = compact('producto');

        return view('detalle', $vars);
    }

    public function editar(Request $req, $id){
        $productoNuevo = Productos::find($id);

        $ruta = $req -> file ("image") -> store("public");
        $nombreArchivo = basename($ruta);

        $productoNuevo-> nombre = $req["nombre"];
        $productoNuevo-> color = $req["color"];
        $productoNuevo-> precio = $req["precio"];
        $productoNuevo-> stock = $req["stock"];
        $productoNuevo-> categoria = $req["categoria"];
        $productoNuevo-> image = $nombreArchivo;

        $productoNuevo->save();

        return redirect('/ABM');
    }

    public function borrar($id) {

        $productoABorrar = Productos::find($id);

        $productoABorrar-> delete();

        return redirect('/ABM');
    }


    }
