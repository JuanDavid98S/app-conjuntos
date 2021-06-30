<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Espacio extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function solicitar_espacios(){
        return hasMany(Solicitar_espacio::class);
    }
}
