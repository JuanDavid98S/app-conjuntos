<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;
use App\Models\Inventario_vivienda;
use App\Models\Vivienda;
use App\Models\Tema;
use App\Models\Solicitud;

class SolicitudesController extends Controller
{
    public function index(){
        return view('solicitudes.index');
    }

    public function indexReparaciones(){
        $usuario = Usuario::where('id', '=', Auth::user()->id)->with('viviendas')->first();
        $vivienda = $usuario->viviendas[0];
        $inventario = Vivienda::where('id', '=', $vivienda->id)->with('inventario')->first()->inventario;

        return view('solicitudes.reparaciones.index')
        ->with('productos', $inventario)
        ->with('vivienda', $vivienda)
        ->with('usuario', $usuario);
    }

    public function agendarReparacion($id){
        $producto = Inventario_vivienda::where('id', '=', $id)->first();

        return view('solicitudes.reparaciones.agendar')
        ->with('producto', $producto);
    }

    public function crearReparacion($id){
        $producto = Inventario_vivienda::where('id', '=', $id)->first();
        $producto->estado = 'Dañado';
        $producto->save();

        $usuario = Usuario::where('id', '=', Auth::user()->id)->with('solicitudes')->first();

        $solicitud = request()->validate([
            'descripcion' => 'required|string'
        ]);

        $usuario->solicitudes()->create([
            'id_usuario' => Auth::user()->id,
            'tipo_solicitud' => 'Reparación general',
            'estado' => 'Pendiente',
            'producto' => $producto->producto,
            'descripcion' => $solicitud['descripcion'],
            'fecha_solicitud' => date('Y-m-d')
        ]);

        return redirect('solicitudes/reparaciones');
    }

    public function indexTemas(){
        $temas = Tema::all();

        return view('solicitudes.temas.index')
        ->with('temas', $temas);
    }

    public function crearTema(){
        $tema = request()->validate([
            'tema' => 'required|string'
        ]);

        $solicitud = new Solicitud;
        $solicitud->id_usuario = Auth::user()->id;
        $solicitud->tipo_solicitud = 'Proposición de tema';
        $solicitud->estado = 'Pendiente';
        $solicitud->tema = $tema['tema'];
        $solicitud->fecha_solicitud = date('Y-m-d');
        $solicitud->save();

        return redirect('solicitudes/tema/nuevo')
        ->with('estado', 'Se ha realizado una solicitud para publicar el tema que propones');
    }
}
