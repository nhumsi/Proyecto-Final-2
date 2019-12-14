<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtrosProductosController extends Controller
{
  public function listado()
  {
    return view('otrosProductos');
  }
}
