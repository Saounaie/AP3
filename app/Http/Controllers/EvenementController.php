<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evenements;

class EvenementController extends Controller
{
    public function getEvenements(){
        $ev = Evenements::all();
        return view('evenements.listeEvenements', ['evenements' =>$ev]);
    }
}
