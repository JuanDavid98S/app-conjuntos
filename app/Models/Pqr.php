<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usuario;

class Pqr extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function usuario(){
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }
}
