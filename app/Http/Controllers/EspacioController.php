<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Espacio;

class EspacioController extends Controller
{
    public function index(){
        $espacios = Espacio::all();

        return view('espacio.index')->with('espacios', $espacios);
    }

    public function reservar($id){
        $espacio = Espacio::where('id', '=', $id)->with('solicitarEspacio')->first();
        $reservas = $espacio->solicitarEspacio->where('fecha', '>=', date('Y-m-d'));

        return view('espacio.reservar')
                ->with('reservas', $reservas)
                ->with('espacio', $espacio);
    }

    public function almacenar($id){
        $espacio = Espacio::where('id', '=', $id)->with('solicitarEspacio')->first();
        $reserva = request()->validate([
            'fecha' => 'date|required',
            'hora_inicio' => 'required',
            'hora_fin' => 'required',
            'numero_personas' => "required|digits_between:0,{$espacio->numero_personas}"
        ]);

        $espacio->solicitarEspacio()->create([
            'id_usuario' => Auth::user()->id,
            'id_espacio' => $espacio->id,
            'estado' => 'Activa',
            'fecha' => $reserva['fecha'],
            'hora_inicio' => $reserva['hora_inicio'],
            'hora_fin' => $reserva['hora_fin'],
            'numero_personas' => $reserva['numero_personas']
        ]);

        return redirect('espacios/index');
    }
}
