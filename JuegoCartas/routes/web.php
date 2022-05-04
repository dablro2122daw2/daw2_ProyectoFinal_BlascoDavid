<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/login', function () {
    return view('login');
});
Route::get('/CrearJugador', function () {
    return view('CrearJugador');
});
Route::get('/MenuJugador', function () {
    return view('index');
});
Route::get('/EliminarJugador', function () {
    return view('EliminarJugador');
});


Route::get('/autentica','ControladorLogin@autentica')->name('autenticacio');
Route::get('/logout','ControladorLogin@logout')->name('/');


Route::get('/destroy','ControladorJugador@destroy')->name('confirmarEliminacio');

Route::resource('jugadors', ControladorJugador::class);