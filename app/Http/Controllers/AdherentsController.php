<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Adhérent;
use App\Models\Réservation;


class AdherentsController extends Controller
{

    public function index($idAdherent){

        if($idAdherent == 1){
            $reservations = Réservation::all();
            return view('adherents.admin', compact('reservations'));
        }

        $adherent = Adhérent::findOrFail($idAdherent);
        $reservations = $adherent->reservations;
    
        return view('adherents.index', compact('reservations'));
    }
    

    public function reservations($idAdherent)
    {
        return view('adherents.reservations', compact('idAdherent'));
    }
    

    public function getAuthPassword(){
        return $this->Pwd;
    }  
}
