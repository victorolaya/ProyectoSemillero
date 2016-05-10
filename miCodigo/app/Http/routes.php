<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix'=>'/formularios-y-datos-semillero/'],function(){
	Route::get('store','UsersController@store');
	Route::resource('','UsersController');
	Route::get('/formulario-de-inscripción-semillas/', function(){
		return view('formulario-inscripcion');
	});

Route::get('home',function() {
	return view('home');
});


});

//Grupo De Rutas Admin --> Victor
Route::group(['middleware'=>['web'],'prefix' => 'admin'], function () {
	
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

    });


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
