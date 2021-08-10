<?php

namespace App\Http\Controllers;
use App\Models\Vivienda;

use Illuminate\Http\Request;

class ViviendaController extends Controller
{
    public function index(){
        $viviendas = Vivienda::where('estado', '=', 'Libre')->get();

        return view('vivienda.index')->with('viviendas', $viviendas);
    }

    public function verVivienda($id){
        $vivienda = Vivienda::find($id);

        return view('vivienda.detalle')->with('vivienda', $vivienda);
    }
}
