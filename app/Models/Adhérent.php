<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adhérent extends Model
{
    use HasFactory;

    protected $table = "Adhérent";
    protected $primaryKey = "idAdhérent";
    public $timestamps = false;

    protected $fillable = ["nom", "prenom", "adresse", "cp", "ville", "telephone",
                           "courriel", "dateNaissance", "dateEntree",
                           "adhesionRenouvelee, Username, Pwd" ];

    
    public function personnel(){
        return $this->hasOne('App\Models\Personnel', 'idAdhérent');
    }

    public function reservation(){
        return $this->hasMany('App\Models\Réservation', 'idReserv');
    }
}
