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

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('recetas', 'recetasDP');

Route::get('recetas', 'recetasDP@index');

Route::get('/inicio',function()
{
    return view('inicio');
});

Route::get('receta',function()
{
    return view('listaRecetas');
});

Route::get('trivia-de-comida',function()
{
    return view('trivia');
});







Route::get('pasos/{slug}','pasosDP@devolverPasos');//tiene que ser el slug

Route::get('cronometro','recetasDP@countDown');

Route::get('pregunta','preguntasDP@sleccionarPreguntaAleatoria');

Route::get('pregunta/corregir/{respuesta}/{id}','preguntasDP@corregirPregunta');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/retos','retosDP@retoAleatorio');

Route::get('/pasos/{slug}/{num}','pasosDP@ordenPasos');//tiene que ser el slug



Route::get('/prueba',function()
{
    return view('layouts.plantilla');
});
