<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    use HasFactory;

    protected $table = "Tarif";
    protected $primaryKey = "idTarif";
    public $timestamps = false;

    protected $fillable = ['tarif', 'reduction'];

    public function reservation(){
        return $this->hasMany('App\Models\Réservation', 'idReserv');
    }

    public function categorie(){
        return $this->hasMany('App\Models\Catégorie', 'idCatégorie');
    }
}
