<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','FrontController@index');
Route::get('contacto','FrontController@contacto');
Route::get('reviews','FrontController@reviews');
Route::get('admin','FrontController@admin');

Route::resource('usuario','UsuarioController');


// Route::get('controlador','PruebaController@index');
// Route::get('controlador2/{nombre}','PruebaController@nombre');
//
// Route::resource('movie','MovieController');
//
// // Ruta Basica
// Route::get('prueba',function(){
// 	return "hola desde route.php";
// });
//
// /*
// 	RUTA BASICA CON PARAMETROS
// */
// /*
// 	ESTRUCTURA
// 	Route:: -->referencia a clase
// 	get --> metodo Http
// 	'nombre' --> nombre de la URL en el navegador
// 	function($nombre) --> funcion recibiendo el parametro
// */
//
// Route::get('nombre/{nombre}',function($nombre){
// 	return "mi nombre es ".$nombre;
// });
//
// Route::get('edad/{edad}',function($edad){
// 	return "mi edad es ".$edad;
// });
// Route::get('edad2/{edad?}',function($edad = 24){
// 	return "mi edad es ".$edad;
// });
//
// Route::get('/', 'WelcomeController@index');
//
// Route::get('home', 'HomeController@index');
//
// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);
