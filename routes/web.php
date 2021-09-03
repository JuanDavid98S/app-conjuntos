<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\PqrController;
use App\Http\Controllers\ViviendaController;
use App\Http\Controllers\EspacioController;
use App\Http\Controllers\ForoController;
use App\Http\Controllers\SolicitudesController;
use App\Http\Controllers\UsuarioController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('pqr')->middleware(['auth'])->group(function() {
    Route::get('lista', [PqrController::class, 'index']);
    Route::get('crear', [PqrController::class, 'crear']);
    Route::post('crear', [PqrController::class, 'almacenar']);
});

Route::prefix('foro')->middleware(['auth'])->group(function() {
    Route::get('index', [ForoController::class, 'index']);
    Route::get('comentarios/{tema:id}', [ForoController::class, 'verTema']);
    Route::post('comentarios/{tema:id}/nuevo', [ForoController::class, 'almacenar']);
});

Route::prefix('viviendas')->middleware(['guest'])->group(function() {
    Route::get('index', [ViviendaController::class, 'index']);
    Route::get('detalle/{vivienda:id}', [ViviendaController::class, 'verVivienda']);
});

Route::prefix('solicitudes')->middleware(['auth'])->group(function() {
    Route::get('index', [SolicitudesController::class, 'index']);
    Route::get('reparaciones', [SolicitudesController::class, 'indexReparaciones']);
    Route::get('reparacion/{inventario_vivienda:id}', [SolicitudesController::class, 'agendarReparacion']);
    Route::post('reparacion/{inventario_vivienda:id}', [SolicitudesController::class, 'crearReparacion']);
    Route::get('tema/nuevo', [SolicitudesController::class, 'indexTemas']);
    Route::post('tema/crear', [SolicitudesController::class, 'crearTema']);
});

Route::prefix('usuario')->middleware(['auth'])->group(function() {
    Route::get('perfil', [UsuarioController::class, 'verPerfil']);
    Route::get('solicitudes', [UsuarioController::class, 'verSolicitudes']);
});

Route::prefix('espacios')->middleware(['auth'])->group(function() {
    Route::get('index', [EspacioController::class, 'index']);
    Route::get('reserva/{espacio:id}', [EspacioController::class, 'reservar']);
    Route::post('reserva/{espacio:id}/crear', [EspacioController::class, 'almacenar']);
});

Route::middleware(['guest'])->group(function () {
    Route::get('registrarse', [RegistroController::class, 'crear']);
    Route::post('registrarse', [RegistroController::class, 'almacenar']);
    Route::get('iniciarSesion', [SesionController::class, 'iniciarSesion']);
    Route::post('iniciarSesion', [SesionController::class, 'inicio']);
});

Route::post('cerrarSesion', [SesionController::class, 'destruir'])->middleware('auth');




