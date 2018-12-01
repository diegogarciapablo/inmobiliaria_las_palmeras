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
route::get('/mi_primer_ruta',function(){
	return'hola mundo';
});
route::get('/nombre/{name}/apellido/{lastname?}',function($name,$lastname='garcia'){
return 'hola '.$name.' '.$lastname;
});
route::get('probando_123/{palabra}','PruebaController@prueba');
route::resource('usuarios','UserController');
Route::get('/ubicacion', 'mapController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');