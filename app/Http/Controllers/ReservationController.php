<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Réservation;
use App\Models\Visite;
use App\Models\Voyage;

class ReservationController extends Controller
{
    public function show($idReserv)
    {
        $reservation = Réservation::findOrFail($idReserv);
        $voyage = $reservation->voyage;
        return view('reservations.details', compact('voyage'));

    }
    
    public function create(){
        $visites = Visite::all();

        return view ('reservations.createReservation', ['visites' => $visites]);
    }

    public function store(Request $request){
        $r = new Réservation();
        $r->idAdhérent = $request->input('idAdhérent');
        $r->idVisite = $request->input('idVisite');
        $r->idTypeVoyage=$request->input('idTypeVoyage');
        $r->idTarif=$request->input('idTarif');
        $r->idCatégorie=$request->input('idCatégorie');
        $r->idEv=$request->input('idEv');
        $r->voyageID=$request->input('voyageID');

        $r->save();

        return redirect()->back();
    }
}
