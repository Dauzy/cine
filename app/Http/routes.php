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

/*

//Se agregan rutas haciendo referencia a la clase Route

//Basic Route
Route::get('foo', function(){
	return 'Holop';
});

Route::get('prueba', function() {
	return "Hola desde routes.php";
});


//Routes with Required Parameters
Route::get('nombre/{nombre}', function ($nombre){
	return "Mi nombre es ".$nombre;
});

Route::get('edad/{edad}', function($edad){
	return "Mi edad es ".$edad;
});

Route::get('posts/{postId}/comments/{commentId}', function ($postId = 10, $commentId = 1) {
    return $postId. " y ".$commentId;
});

//Routes with Optional Parameters
Route::get('user/{name?}', function ($name = 'John') {
    return $name;
});

//Regular Expression Constraints
Route::get('users/{id}/{name}', function ($id, $name) {
    return $id. " y ".$name;
})
->where(['id' => '[0-9]+', 'name' => '[a-z]+']);


//Llamada de controladores 
Route::get('controlador/{nombre}','PruebaController@nombre');
Route::resource('movie','MovieController');

Route::get('/', function () {
    return view('welcome');
});

*/

Route::get('/', 'FrontController@index');
Route::get('contacto', 'FrontController@contacto');
Route::get('reviews', 'FrontController@reviews');
Route::get('admin', 'FrontController@admin');

Route::get('password/email','Auth\PasswordController@getEmail');
Route::post('password/email','Auth\PasswordController@postEmail');

Route::resource('mail', 'MailController');
Route::resource('user', 'UserController');
Route::resource('genre', 'GenreController');
Route::get('genres','GenreController@listing');
Route::resource('movie', 'MovieController');

Route::resource('log', 'LogController');
Route::get('logout', 'LogController@logout');


Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
