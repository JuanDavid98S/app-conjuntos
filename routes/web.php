<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SesionController;


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

Route::get('registrarse', [RegistroController::class, 'crear'])->middleware('guest');
Route::post('registrarse', [RegistroController::class, 'almacenar'])->middleware('guest');
Route::get('iniciarSesion', [SesionController::class, 'iniciarSesion'])->middleware('guest');
Route::post('iniciarSesion', [SesionController::class, 'inicio'])->middleware('guest');
Route::post('cerrarSesion', [SesionController::class, 'destruir'])->middleware('auth');