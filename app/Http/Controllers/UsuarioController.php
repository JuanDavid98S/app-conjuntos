<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;
use App\Models\Solicitud;
use App\Models\Solicitud_espacio;
use App\Models\Espacio;


class UsuarioController extends Controller
{
    public function verPerfil(){
        $usuario = Usuario::where('id', '=', Auth::user()->id)->first();

        return view('usuario.index')
        ->with('usuario', $usuario);
    }

    public function verSolicitudes(){
        $usuario = Usuario::where('id', '=', Auth::user()->id)
        ->with('solicitudes')
        ->with('solicitar_espacios')->first();

        $solicitudes = $usuario->solicitudes;
        $solicitudEspacios = $usuario->solicitar_espacios;

        return view('usuario.solicitudes')
        ->with('usuario', $usuario)
        ->with('solicitudes', $solicitudes)
        ->with('solicitudEspacio', $solicitudEspacios);
    }
}
