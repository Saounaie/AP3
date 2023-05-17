<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Réservation;
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
        return view ('reservations.createReservation');
    }

    public function store(){
        
    }
}
