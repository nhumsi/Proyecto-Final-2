<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;

class CarritoController extends Controller
{
  public function agregarProducto($idProducto) {

    $producto = Productos::find($idProducto);

    return view('carrito')->with('producto', $producto);

  }
}
