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
| PODEMOS TENER RUTAS DE TIPOGET, POST, PUT, DELETE
*/

Route::get('/', function () {
	return view('users.inicio');
});

Route::group(['prefix' =>'inicio'],function(){
	Route::get('semillas-primaria',function(){
		return view('users.inicio.semillas-primaria');
	});
	Route::get('semillas-secundaria',function(){
		return view('users.inicio.semillas-secundaria');
	});
	Route::get('diplomado-experiencias-universitarias',function(){
		return view('users.inicio.diplomado-expUniversitarias');
	});
	Route::get('pre-icfes-saber-11',function(){
		return view('users.inicio.preicfes-saber11');
	});
	Route::get('pre-icfes-10',function(){
		return view('users.inicio.preicfes-saber10');
	});
});


Route::group(['middleware' => 'admin'], function(){
	Route::group(['middleware' => 'auth:admin'], function(){
		Route::get('/admin','AdminController@index');
	});
	
	Route::get('/admin/login','AdminController@login');
	Route::post('/admin/login','AdminController@postLogin');
	Route::get('/admin/logout','AdminController@logout');


	Route::get('semillas/{id}/destroy', ['uses'=>'SemillasController@destroy',
		'as' => 'admin.semillas.destroy']);

	Route::resource('admin/area','AreasController');
	Route::get('areas/{id}/destroy',['uses'=>'AreasController@destroy', 
		'as' => 'admin.area.destroy']);

	Route::resource('admin/grupo', 'GruposController');
	Route::get('grupos/{id}/destroy', ['uses' => 'GruposController@destroy',
		'as' => 'admin.grupo.destroy']);

	Route::resource('admin/mentor','MentoresController');
	Route::get('mentores/{id}/destroy', ['uses' => 'MentoresController@destroy',
	'as' => 'admin.mentor.destroy']);


	Route::resource('admin/administradores','AdminController');
	Route::get('administradores/{id}/',['uses'=>'AdminController@destroy', 
		'as' => 'admin.administradores.destroy']);

	Route::resource('admin/semillas','SemillasController');
	Route::get('semillas/{id}/',['uses'=>'SemillasController@destroy', 
		'as' => 'admin.semillas.destroy']);

	Route::get('mentor/imprimir', ['uses' => 'MentoresController@imprimirpdf',
		'as' => 'admin.mentor.imprimirpdf']);

	Route::get('semilla/imprimir', ['uses' => 'SemillasController@imprimirpdf',
		'as' => 'admin.semilla.imprimirpdf']);

});

Route::group(['prefix'=>'formularios-y-datos-semillero'],function(){
	Route::get('/',function(){
		return view('users.formularios.index');
	});
	Route::get('formulario-de-inscripción-semillas', function(){
		return view('users.formulario-inscripcion');
	});
	Route::post('/store',['uses'=>'SemillasController@guardarSemilla', 'as'=>'store']);
});
