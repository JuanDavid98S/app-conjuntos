<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class RegistroController extends Controller
{
    public function crear()
    {
        return view('autenticacion.crear');
    }

    public function almacenar()
    {
        $usuario = request()->validate([
           'nombre' => 'required',
           'apellido' => 'required',
           'telefono' => 'required|digits:10',
           'numero_documento' => 'required',
           'correo' => 'required|email|unique:usuarios,correo',
           'contrasenia' => 'required|min:7',
        ]);

        $usuario = Usuario::create($usuario);

        auth()->login($usuario);

        //Retorna con un mensaje si la cuenta ha sido creada
        return redirect('/')->with('mensajeCreacionCuenta', 'Tu cuenta ha sido creada');
    }
}
