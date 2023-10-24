<?php

namespace App\Http\Controllers;

use App\Models\Sejour;
use Illuminate\Http\Request;

class SejourController extends Controller
{
    //
    // Ajout de pagination pour un séjour 
    // public function listeSejour()
    // {
    //     $sejours = Sejour::all();
    //     $sejours = Sejour::simplePaginate(5);
    //     return view('listeSejour', compact('sejours'));
    // }
}
