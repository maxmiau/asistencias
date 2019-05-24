<?php

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

Route::get('/', 'PaginaController@index');
Route::get('/acerca', 'PaginaController@acerca');
Route::get('/servicio', 'PaginaController@servicio');

// Rutas del login
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Rutas de las faltas
Route::resource('falta', 'faltaController');
