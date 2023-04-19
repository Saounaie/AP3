<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Adhérent;


class AdherentsController extends Controller
{
    public function getAdherents(){
        $adherents = Adhérent::all();
        return view('adherents.listeAdherents', ['adherents' =>$adherents]);
    }

    public function getAuthPassword(){
        return $this->Pwd;
    }  
}
