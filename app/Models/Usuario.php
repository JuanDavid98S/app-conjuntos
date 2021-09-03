<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Authenticatable
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $guarded = [];

    public function comentarios(){
        return $this->hasMany(Comentario::class, 'id_usuario');
    }

    public function viviendas(){
        return $this->hasMany(Vivienda::class, 'id_usuario');
    }

    public function pqrs(){
        return $this->hasMany(Pqr::class, 'id_usuario');
    }

    public function solicitar_espacios(){
        return $this->hasMany(Solicitud_espacio::class, 'id_usuario');
    }

    public function solicitudes(){
        return $this->hasMany(Solicitud::class, 'id_usuario');
    }

    public function transacciones(){
        return $this->hasMany(Transaccion::class, 'id_usuario');
    }

    //mutator, función que se ejecuta antes de guardar un registro
    public function setContraseniaAttribute($contrasenia)
    {
        $this->attributes['contrasenia'] = bcrypt($contrasenia);
    }

    public function getAuthPassword()
    {
        return $this->contrasenia;
    }
    
}
