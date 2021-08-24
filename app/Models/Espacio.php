<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Espacio extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function solicitarEspacio(){
        return $this->hasMany(Solicitud_espacio::class, 'id_espacio');
    }
}
