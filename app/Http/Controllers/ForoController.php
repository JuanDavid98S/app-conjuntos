<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tema;
use App\Models\Comentario;


class ForoController extends Controller
{
    public function index(){
        $temas = Tema::all();

        return view('foro.index')->with('temas', $temas);
    }

    public function verTema($id){
        $tema = Tema::where('id', '=', $id)->with('comentarios')->first();
        $comentarios = $tema->comentarios;

        return view('foro.tema')
        ->with('tema', $tema)
        ->with('comentarios', $comentarios);
    }

    public function almacenar($id){
        $tema = Tema::where('id', '=', $id)->with('comentarios')->first();
        $comentario = request()->validate([
            'contenido' => 'required|string'
        ]);

        $tema->comentarios()->create([
            'id_tema' => $tema->id,
            'id_usuario' => Auth::user()->id,
            'contenido' => $comentario['contenido'],
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect("foro/comentarios/{$tema->id}")
        ->with('tema', $tema)
        ->with('comentarios', $tema->comentarios);
    }
}
