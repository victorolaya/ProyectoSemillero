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

	Route::get('pdf',function(){
		//para poner en el controlador, con \ antes de PDF (\PDF) para no tener conflictos con el namespace
		$mentores = App\Mentor::all();
		$pdf = PDF::loadView('admin/mentor/vistapdf',);
		return $pdf->download('archivo.pdf');
	});

    });
