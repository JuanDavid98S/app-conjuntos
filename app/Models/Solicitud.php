<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;

    protected $table = 'solicitudes';
    protected $guarded = [];
    public $timestamps = false;

    public function usuario(){
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }
}
