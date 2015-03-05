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

//Route::get('/', 'WelcomeController@index');


/*
Route::get('/', 'MyController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

*/

Route::resource('vehiculos','VehiculoController',['only' => ['index','show']]);
Route::resource('fabricantes','FabricanteController', ['except' => ['edit','create']]);
Route::resource('fabricantes.vehiculos','FabricanteVehiculoController', ['except' => ['show','edit','create']]);

Route::pattern('inexistentes', '.*');
Route::any('/{inexistentes}', function()
{
	return response()->json(['mensaje' => 'Ruta o metodo incorrecto','codigo' => 400],400);
});