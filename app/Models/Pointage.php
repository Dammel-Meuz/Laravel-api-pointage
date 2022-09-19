<?php

namespace App\Models;
use App\Models\Pointeur;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pointage extends Model
{
   // use HasFactory;
   protected $fillable = [
    'firstName',
    'lastName',
    'email',
    'phone'
    
];
    public function pointeur(){
        return $this->belongsTo(Pointeur::class);
    }
}
