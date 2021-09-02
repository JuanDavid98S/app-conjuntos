<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pqr;
use App\Models\Usuario;

class PqrController extends Controller
{
    public function index()
    {
        $usuario = Usuario::where('id', '=', Auth::user()->id)->with('pqrs')->first();
        $pqrs = $usuario->pqrs;

        return view('pqr.inicio')->with('pqrs', $pqrs);
    }

    public function crear()
    {
        return view('pqr.crear');
    }

    public function almacenar()
    {
        $pqr = request()->validate([
            'descripcion' => 'required',
        ]);

        $usuario = Usuario::where('id', '=', Auth::user()->id)->with('pqrs')->first();
        $usuario->pqrs()->create([
            'id_usuario' => Auth::user()->id,
            'estado' => 'Pendiente',
            'descripcion' => $pqr['descripcion'],
            'evidencia' => null
        ]);

        return redirect('pqr/lista');
    }
}
