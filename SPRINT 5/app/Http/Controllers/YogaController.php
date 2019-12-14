<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YogaController extends Controller
{
  public function listado()
  {
    return view('yoga');
  }
}
