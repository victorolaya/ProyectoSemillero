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
	return view('users.inicio');
});


/*//ANTIGUO ANTES DE FLASH -> Route::group(['prefix' => 'admin'], function () {
/Route::group(['middleware'=>['web'],'prefix' => 'admin'], function () {
	
	/*
	* Lo que hace resource, es tomar las funciones de un controlador y trasformarlas en rutas
	*/
	/*Route::resource('user','ControladorUsuarios');
	Route::get('users/{id}/destroy', ['uses' => 'ControladorUsuarios@destroy','as' => 'admin.user.destroy']);

	Route::resource('mentor','ControladorMentores');
	Route::get('mentores/{id}/destroy', ['uses' => 'ControladorMentores@destroy','as' => 'admin.mentor.destroy']);

	Route::resource('area','ControladorAreas');
	Route::get('areas/{id}/destroy', ['uses' => 'ControladorAreas@destroy','as' => 'admin.area.destroy']);

	Route::resource('grupo','ControladorGrupos');
	Route::get('grupos/{id}/destroy', ['uses' => 'ControladorGrupos@destroy','as' => 'admin.grupo.destroy']);

	Route::get('admin/mentor/imprimir', ['uses' => 'ControladorMentores@imprimirpdf',
		'as' => 'admin.mentor.imprimirpdf']);
	/*Route::get('pdf',function(){
		//para poner en el controlador, con \ antes de PDF (\PDF) para no tener conflictos con el namespace
		$mentores = App\Mentor::all();
		//Mando un arreglo de mentores "mentores"
		$pdf = PDF::loadView('admin/mentor/vistapdf',['mentores' => $mentores]);
		return $pdf->download('archivo.pdf');
	});*/

/*});*/

Route::group(['middleware' => 'admin'], function(){
	Route::group(['middleware' => 'auth:admin'], function(){
		Route::get('/admin','AdminController@index');
	});
	
	Route::get('/admin/login','AdminController@login');
	Route::post('/admin/login','AdminController@postLogin');
	Route::get('/admin/logout','AdminController@logout');
	Route::get('/admin/semillas','SemillasController@listarSemillas');

	Route::get('semillas/{id}/destroy', ['uses'=>'SemillasController@destroy',
		'as' => 'admin.semillas.destroy']);

	Route::resource('admin/area','ControladorAreas');
	Route::get('areas/{id}/destroy',['uses'=>'ControladorAreas@destroy', 
		'as' => 'admin.area.destroy']);

	Route::resource('admin/grupo', 'ControladorGrupos');
	Route::get('grupos/{id}/destroy', ['uses' => 'ControladorGrupos@destroy',
		'as' => 'admin.grupo.destroy']);

	Route::resource('admin/mentor','ControladorMentores');
	Route::get('mentores/{id}/destroy', ['uses' => 'ControladorMentores@destroy',
	'as' => 'admin.mentor.destroy']);


	Route::resource('admin/administradores','AdminController');
	Route::get('admin/{id}/destroy',['uses'=>'AdminController@destroy', 
		'as' => 'admin.admin.destroy']);

	Route::resource('admin/semillas','SemillasController');

	Route::group(['middleware'=>['web'],'prefix'=>'admin'],function(){
		Route::get('mentor/imprimir', ['uses' => 'ControladorMentores@imprimirpdf',
			'as' => 'admin.mentor.imprimirpdf']);
	});
	
});

Route::group(['prefix'=>'formularios-y-datos-semillero'],function(){
	Route::get('/',function(){
		return view('users.formularios.index');
	});
	Route::get('formulario-de-inscripción-semillas', function(){
		return view('users.formulario-inscripcion');
	});
	Route::post('/inscSemilla',['uses'=>'SemillasController@guardarSemilla', 'as'=>'inscSemilla']);
});
