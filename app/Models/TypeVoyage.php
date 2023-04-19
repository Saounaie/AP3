<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeVoyage extends Model
{
    use HasFactory;

    protected $table = "TypeVoyage";
    protected $primaryKey = "idTypeVoyage";
    public $timestamps = false;

    protected $fillable = ["nomTypeVoyage"];

    public function reservation(){
        return $this->hasMany('App\Models\Réservation', 'idReserv');
    }

    public function reservation(){
        return $this->hasMany('App\Models\Voyage', 'idVoyage');
    }
}
