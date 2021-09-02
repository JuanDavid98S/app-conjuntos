<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario_vivienda extends Model
{
    use HasFactory;

    protected $table = 'inventario_vivienda';
    protected $guarded = [];

    public function vivienda(){
        return $this->belongsTo(vivienda::class, 'id_vivienda');
    }
}
