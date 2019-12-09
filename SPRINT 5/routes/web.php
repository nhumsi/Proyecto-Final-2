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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', function(){
    return view('index');
} );

Route::get('/contacto', function(){
    return view('contacto');
} );

Route::get('/catalogo', function(){
    return view('catalogo');
} );

Route::get('/carrito', function(){
    return view('carrito');
} );

Route::get('/QA', function(){
    return view('QA');
} );


Route::get('/registro',function(){
    return view('registro');
});
Route::post('/registro/guardar', 'RegistroController@guardar');
