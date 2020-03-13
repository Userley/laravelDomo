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

Route::get('/inicio', 'DispositivoController@index');

Route::get('/historial', function () {
    return view('layouts/historial');
});

Route::get('/accesos', function () {
    return view('layouts/accesos');
});

Route::get('/alumnos/{id}','AlumnoController@index');