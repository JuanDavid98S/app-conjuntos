<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\PqrController;
use App\Http\Controllers\ViviendaController;



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

Route::prefix('viviendas')->middleware(['guest'])->group(function() {
    Route::get('index', [ViviendaController::class, 'index']);
    Route::get('detalle/{vivienda:id}', [ViviendaController::class, 'verVivienda']);
});

Route::middleware(['guest'])->group(function () {
    Route::get('registrarse', [RegistroController::class, 'crear']);
    Route::post('registrarse', [RegistroController::class, 'almacenar']);
    Route::get('iniciarSesion', [SesionController::class, 'iniciarSesion']);
    Route::post('iniciarSesion', [SesionController::class, 'inicio']);
});

Route::post('cerrarSesion', [SesionController::class, 'destruir'])->middleware('auth');




