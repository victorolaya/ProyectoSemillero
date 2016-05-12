<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//LLamo mi modelo de semilla
use App\Semilla;

class ControladorSemillas extends Controller
{
    

    public function create()
    {
    	return view('admin.semilla.crear');
    }

     public function store(Request $request)
    {
    	//Me muestra todos los datos que me llegan desde la vista : dd($request ->all());
    	$semilla = new Semilla($request->all());
    	$semilla ->save();
    	dd('Semilla Creada!!!');
    }
}
