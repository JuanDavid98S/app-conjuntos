<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function comentarios(){
        return hasMany(Comentario::class);
    }

    public function viviendas(){
        return hasMany(Vivienda::class);
    }

    public function pqrs(){
        return hasMany(Pqr::class);
    }

    public function solicitar_espacios(){
        return hasMany(Solicitar_espacio::class);
    }

    public function solicitudes(){
        return hasMany(Solicitud::class);
    }

    public function transacciones(){
        return hasMany(Transaccion::class);
    }
    
}
