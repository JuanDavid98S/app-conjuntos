<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tema(){
        return belongsTo(Tema::class);
    }

    public function usuario(){
        return belongsTo(Usuario::class);
    }
}
