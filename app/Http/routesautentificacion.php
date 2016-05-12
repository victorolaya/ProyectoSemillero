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

Route::get('/', function () {
	return view('welcome');
});


//ANTIGUO ANTES DE FLASH -> Route::group(['prefix' => 'admin'], function () {
//ANTES DE AUTH ---> Route::group(['middleware'=>['web'],'prefix' => 'admin'], function () {
Route::group(['middleware' => ['web']], function () {

    Route::group(['prefix' => 'admin','middleware' => 'auth'], function(){

    	Route::get('/',['as' => 'admin.index', function () {
		return view('welcome');
		}]);
	    /*
		* Lo que hace resource, es tomar las funciones de un controlador y trasformarlas en rutas
		*/
		Route::resource('user','ControladorUsuarios');
		Route::get('users/{id}/destroy', ['uses' => 'ControladorUsuarios@destroy','as' => 'admin.user.destroy']);

		Route::resource('mentor','ControladorMentores');
		Route::get('mentores/{id}/destroy', ['uses' => 'ControladorMentores@destroy','as' => 'admin.mentor.destroy']);

		Route::resource('area','ControladorAreas');
		Route::get('areas/{id}/destroy', ['uses' => 'ControladorAreas@destroy','as' => 'admin.area.destroy']);

		Route::resource('grupo','ControladorGrupos');
		Route::get('grupos/{id}/destroy', ['uses' => 'ControladorGrupos@destroy','as' => 'admin.grupo.destroy']);

		Route::resource('mentor','ControladorMentores');
		Route::resource('semilla','ControladorSemillas');


 	});

});


Route::get('admin/auth/login',[
	'uses' =>  'Auth\AuthController@getLogin',
	'as' => 'admin.auth.login'
	]); 

Route::post('admin/auth/login',[
	'uses' =>  'Auth\AuthController@postLogin',
	'as' => 'admin.auth.login'
	]); 

Route::get('admin/auth/logout',[
	'uses' =>  'Auth\AuthController@getLogout',
	'as' => 'admin.auth.logout'
	]); 

/*
header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0',false);
header('Pragma: no-cache');
return View::make('admin.auth.login');﻿
*/