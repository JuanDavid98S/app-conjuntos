<?php

namespace App\Http\Controllers;


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

        if(auth()->attempt($atributos))
            return redirect('/')->with('inicioSesion', 'Ha iniciado sesión');
        
        return back()
        ->withInput()
        ->withErrors(['correo' => 'Las credenciales no pudieron ser verificadas en el sistema']);
    }
}
