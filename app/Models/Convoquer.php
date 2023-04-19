<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convoquer extends Model
{
    use HasFactory;

    protected $table = "Convoquer";
    
    public $timestamps = false;

    protected $fillable = ["idReu", "idAdhérent"];
}
