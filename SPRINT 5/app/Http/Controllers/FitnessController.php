<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fitness;

class FitnessController extends Controller
{
    public function listado()
    {
      $fitness = Fitness::paginate(6);

      $vac = compact ('fitness');
      return view('fitness', $vac);
    }
}
