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
Route::get('/ActualitzarJugador', function () {
    return view('ActualitzarJugador');
});


//Crear y unir a sala de juegos creadas
Route::get('/sala/crear', function() {
    $sala = uniqid();

    return redirect("/jugar?sala=$sala");
});

Route::get('/jugar', function() {
    return view('Jugar', ['sala' => $_GET["sala"]]);
});

Route::get('/sala/unirse', function() {
    return view('UnirseSala');
});




Route::get('/PruebaWebSockets', function () {
    return view('Prueba');
});

Route::get('/autentica','ControladorLogin@autentica')->name('autenticacio');
Route::get('/logout','ControladorLogin@logout')->name('/');

Route::get('/update','ControladorJugador@update')->name('confirmarActualitzacio');
Route::get('/destroy','ControladorJugador@destroy')->name('confirmarEliminacio');

Route::resource('jugadors', ControladorJugador::class);

//Route::get('/inicio', 'ControladorInicio@index');