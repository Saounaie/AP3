<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Réservation extends Model
{
    use HasFactory;

    protected $table = "Réservation";
    protected $primaryKey = "idReserv";
    public $timestamps = false;

    protected $fillable = [
        "absent",
        "idAdhérent",
        "idVisite",
        "idTypeVoyage",
        "idTarif",
        "idCatégorie",
        "idEv"
    ];

    public function adhérent(){
        return $this->belongsTo(Adhérent::class, 'idAdhérent');
    }

    public function visite(){
        return $this->belongsTo(Visite::class, 'idVisite');
    }

    public function typeVoyage(){
        return $this->belongsTo(TypeVoyage::class, 'idTypeVoyage');
    }

    public function evenements(){
        return $this->belongsTo(Evenements::class, 'idEv');
    }

    public function tarif(){
        return $this->belongsTo(Tarif::class, 'idTarif');
    }

    public function catégorie(){
        return $this->belongsTo(Catégorie::class, 'idCatégorie');
    }
    
}
