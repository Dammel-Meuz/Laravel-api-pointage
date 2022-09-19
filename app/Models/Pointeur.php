<?php

namespace App\Models;
use App\Models\Pointage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pointeur extends Model
{
    use HasFactory;
    public function pointages(){
        return $this->hasMany(Pointage::class);
    }
}
