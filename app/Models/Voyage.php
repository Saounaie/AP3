<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    use HasFactory;

    protected $table = "Voyage";
    protected $primaryKey = "idVoyage";
    public $timestamps = false;

    protected $fillable = [
        "lieu",
        "duree",
        "idTypeVoyage"
    ];

    public function reservations(){
        return $this->hasMany('App\Models\Réservation', 'voyageID');
    }

    public function typeVoyage(){
        return $this->belongsTo(TypeVoyage::Class, 'idTypeVoyage');
    }

    
}
