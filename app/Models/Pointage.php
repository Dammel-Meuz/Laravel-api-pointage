<?php

namespace App\Models;
use App\Models\Pointeur;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pointage extends Model
{
        use HasFactory;
        protected $fillable=[
            'pointeur_id',
            'phone',
            'date',
            'heurDarriver',
            'heurDepart'
        ];

    public function pointeur(){
        return $this->belongsTo(Pointeur::class);
    }
}
