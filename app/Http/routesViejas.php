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

//PODEMOS TENER RUTAS DE TIPOGET, POST, PUT, DELETE

 Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    });

	Route::get('home',function() {
		return view('home');
	});

	/**Route::get('semillas/{nombre}',function($nombre){
		echo "El nombre que has colocado es: ".$nombre;
	});*/

	/**Route::get('semillas/{nombre?}',function($nombre = "Pon algun de nombre"){
		echo "El nombre que has colocado es: ".$nombre;
	});*/

});

Route::group(['prefix' => 'semilla'], function () {

   Route::get('view/{id}', [
  	'uses' =>'ControladorDePrueba@view',
   	'as' => 'semillasView'
   	]);
});

