<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
//USAR LA CLASE SEMILLA
use App\Semilla;

class ControladorDePrueba extends Controller
{
   public function view($id)
   {
	 $semilla = Semilla::find($id);
	 $semilla -> notas;
	 $semilla -> foto_semilla;
	 $semilla -> acudientes;

	 
	
	return view('test.index',['semilla'=>$semilla]);

	 
	}
}
