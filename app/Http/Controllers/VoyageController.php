<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voyage;

class VoyageController extends Controller
{
    // public function getVoyage(){
    //     $voyage = Voyage::all();
    //     return view('voyage.listeVoyage', ['voyage' =>$voyage]);
    // }

    public function index(){
        $voyage = Voyage::all();
        return view('voyage.gestionVoyage', ['voyage' =>$voyage]);
    }

    public function create(){
        return view('voyage.createVoyage');
    }

    public function store(Request $request){
        $v = new Voyage();
        $v->lieu = $request->input('lieu');
        $v->duree = $request->input('duree');
        $v->idTypeVoyage=$request->input('typeVoyage');

        $v->save();



        return redirect('voyage');

        // METHODE ATTACH
    }

    public function edit($id){
        $v = \App\Models\Voyage::find($id);
        return view ('voyage.editVoyage', compact('v', 'id'));
    }

    public function update(Request $request, $id){
        $voyage = Voyage::find($id);
        $voyage->lieu=$request->input('lieu');
        $voyage->duree=$request->input('duree');


        $voyage->save();

        return redirect('voyage');
    }
    
    public function show($id){
        $v = Voyage::find($id);
        return view('voyage.detailsVoyage', ['unVoyage'=> $v]);
    }

    public function destroy($id){
        $v = Voyage::find($id);
        $v->delete();
        
        return redirect('voyage');
    }

    public function delete($id){
        Voyage::find($id)->delete();
        return redirect()->back();

    }

     

}
