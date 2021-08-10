<?php

namespace App\Http\Controllers;

use Hash;
use  App\Models\Usuario;

class SesionController extends Controller
{
    public function destruir()
    {
        auth()->logout();

        return redirect('/')->with('mensajeDespedida', 'Vuelve pronto!');
    }

    public function iniciarSesion()
    {
        return view('autenticacion.iniciarSesion');
    }

    //Inicia sesión
    public function inicio()
    {
        $atributos = request()->validate([
            'correo' => ['required', 'email'],
            'contrasenia' => ['required']
        ]);

        $usuario = Usuario::where('correo', request()->correo)->first();

        if(Hash::check(request()->contrasenia, $usuario->contrasenia)){
            auth()->login($usuario);
            return redirect('/')->with('inicioSesion', 'Ha iniciado sesión');
        }
        
        return back()
        ->withInput()
        ->withErrors(['correo' => 'Las credenciales no pudieron ser verificadas en el sistema']);
    }
}
