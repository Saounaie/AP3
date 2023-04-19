<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visite extends Model
{
    use HasFactory;

    protected $table = "Visite";
    protected $primaryKey = "idVisite";
    public $timestamps = false;

    protected $fillable = [
        "dateVisite",
        "heureDeb",
        "heureFin",
        "idVoyage"
    ];

    public function reservation(){
        return $this->hasMany('App\Models\Réservation', 'idReserv');
    }

    public function voyage(){
        return $this->belongsTo(Voyage::class, 'idVoyage');
    }
}
