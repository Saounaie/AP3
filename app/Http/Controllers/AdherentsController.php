<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Adhérent;


class AdherentsController extends Controller
{

    public function index($idAdherent){
        $adherent = Adhérent::findOrFail($idAdherent);
        $reservations = $adherent->reservations;
    
        return view('adherents.index', compact('reservations'));
    }
    

    

    public function getAuthPassword(){
        return $this->Pwd;
    }  
}
