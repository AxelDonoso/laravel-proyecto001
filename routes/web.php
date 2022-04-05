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
Route::get('/contacto/{nombre?}/{edad?}', function ($nombre= 'axel', $edad='31'){
    return view('contacto')
        ->with('nombre', $nombre)
        ->with('edad', $edad);
})->where([
    'nombre' => '[A-Za-z]+',
    'edad' => '[0-9]+'
]);
Route::get('/listado/{titulo?}', function($titulo){
    return view('listado')
    ->with('titulo', $titulo)
    ->with('frutas', array('pera','manzana','frutilla'));
});

Route::get('/verduras', 'App\Http\Controllers\VerdurasController@index');


Route::get('verduras/agregar', 'App\Http\Controllers\VerdurasController@agregar');

Route::get('verduras/editar', 'App\Http\Controllers\VerdurasController@editar');

Route::get('verduras/eliminar',[

 'uses'=>'App\Http\Controllers\VerdurasController@eliminar',
  'as'=>'eliminarVerdura'
]);

//guardar formulario

Route::post('guardarFormulario',[

    'uses'=>'App\Http\Controllers\VerdurasController@guardarFormulario',
     'as'=>'guardarFormulario'
   ]);
















