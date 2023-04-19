<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catégorie extends Model
{
    use HasFactory;

    protected $table = "Catégorie";
    protected $primaryKey = "idCatégorie";
    public $timestamps = false;

    protected $fillable = ["tauxRed", "ageMinimum", "idTarif"];

    public function reservation(){
        return $this->hasMany('App\Models\Réservation', 'idReserv');
    }

    public function tarif(){
        return $this->belongsTo(Tarif::class, 'idTarif');
    }
}
