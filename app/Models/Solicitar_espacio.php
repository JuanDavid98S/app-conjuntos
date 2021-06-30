<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitar_espacio extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function espacio(){
        return hasOne(Espacio::class);
    }

    public function usuario(){
        return belongsTo(Usuario::class);
    }
}
