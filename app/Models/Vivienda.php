<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vivienda extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function conjunto(){
        return $this->belongsTo(Conjunto::class, 'id_conjunto');
    }

    public function inventario(){
        return $this->hasMany(Inventario_vivienda::class, 'id_vivienda');
    }
}
