<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sejour extends Model
{
    use HasFactory;
    protected $fillable =[
        'voyageur_id',
        'logement_id',
        'debut',
        'fin',
    ];
    public function voyageur(){
        return $this->belongsTo(Voyageur::class,'voyageur_id','id');
    }
    public function logement(){
        return $this->belongsTo(Logement::class,'logement_id','id');
    }

}
