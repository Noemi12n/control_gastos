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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuarios','UsuariosController@index')->name('usuarios');

Route::get('/permisos','PermisosController@index')->name('permisos');
Route::get('/permisos/create','PermisosController@create')->name('permisos.create');
Route::post('/permisos/store','PermisosController@store')->name('permisos.store');

Route::get('/permisos/edit/{per_id}','PermisosController@edit')->name('permisos.edit');
Route::post('/permisos/update/{per_id}','PermisosController@update')->name('permisos.update');
Route::post('/permisos/destroy/{per_id}','PermisosController@destroy')->name('permisos.destroy');

Route::get('/movimiento','MovimientoController@index')->name('movimiento');
Route::get('/movimiento/create','MovimientoController@create')->name('movimiento.create');

Route::get('/tipo','TipoController@index')->name('tipo');
Route::get('/tipo/create','TipoController@create')->name('tipo.create');
Route::post('/tipo/store','TipoController@store')->name('tipo.store');

Route::get('/tipo/edit/{tip_id}','TipoController@edit')->name('tipo.edit');
Route::post('/tipo/update/{tip_id}','TipoController@update')->name('tipo.update');
Route::post('/tipo/destroy/{tip_id}','TipoController@destroy')->name('tipo.destroy');

Route::get('/movimiento','MovimientoController@index')->name('movimiento');
Route::get('/movimiento/create','MovimientoController@create')->name('movimiento.create');
Route::post('/movimiento/store','MovimientoController@store')->name('movimiento.store');

Route::get('/movimiento/edit/{mov_id}','MovimientoController@edit')->name('movimiento.edit');
Route::post('/movimiento/update/{mov_id}','MovimientoController@update')->name('movimiento.update');
Route::post('/movimiento/destroy/{mov_id}','MovimientoController@destroy')->name('movimiento.destroy');


Route::post('/movimiento/search','MovimientoController@index')->name('movimiento.search');






