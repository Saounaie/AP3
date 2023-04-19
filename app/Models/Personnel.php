<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;

    protected $table = "Personnel";
    protected $primaryKey = "idAdhérent";
    public $timestamps = false;

    protected $fillable = ["specialite", "remplacement", "dernierDiplome", "nbAnneeExperience"];
    
    public function adhérent(){
        return $this->hasOne('User', 'idAdhérent');
    }

    public function reservation(){
        return $this->hasMany('App\Models\Réunion', 'idReu');
    }

    public function reunion(){
        return $this->belongsToMany('App\Models\Réunion', 'Convoquer', 'idAdhérent', 'idReu');
    }   

    public function evenement(){
        return $this->belongsToMany('App\Models\Evenement', 'Organiser', 'idAdhérent', 'idEv');
    }   
}
