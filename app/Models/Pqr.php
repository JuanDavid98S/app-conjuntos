<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pqr extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function pqr(){
        return belongsTo(Usuario::class);
    }
}
