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

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/index', function(){
    return view('index');
} );

Route::get('/contacto', function(){
    return view('contacto');
} );

Route::get('/fitness', 'FitnessController@listado');

Route::get('/yoga', 'YogaController@listado');

Route::get('/otrosProductos', 'OtrosProductosController@listado' );

Route::get('/registro',function(){
    return view('registro');
});

Route::post('/registro/guardar', 'RegistroController@guardar');



Route::get('/carrito', function(){
    return view('carrito');
} );

Route::get('/carrito/{id}', 'FitnessController@detalleVenta');
Route::post('/carrito/agregar', 'FitnessController@agregar');

Route::get('/ABM',function(){
    return view('ABM');
});

Route::get('/ABM/buscar', "FitnessController@buscar");
Route::get('/ABM/{id}', 'FitnessController@detalle');
Route::post('/ABM/guardar', 'FitnessController@guardar');
Route::post('/ABM/editar', 'FitnessController@editar');





Route::get('/QA', function(){
    return view('QA');
} );


Route::get('/registro',function(){
    return view('registro');
});
Route::post('/registro/guardar', 'RegistroController@guardar');



//Route::post('/login/loguearse', 'LoginController@loguearse');

Route::get('/prueba', 'PruebaController@listadoFitness');

Route::get('/perfil', 'PerfilController@mostrar')->middleware('auth');

Route::get('/perfil/editar', 'PerfilController@editar');

Route::post('/perfil', ['as'=>'upload.image','uses'=>'PerfilController@guardar']);
