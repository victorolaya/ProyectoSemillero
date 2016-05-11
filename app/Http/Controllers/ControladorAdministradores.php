<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//LLamo mi modelo de Administrador
use App\Administrador;
//Importo laracast flash para la proyeccion de mensajes
use Laracasts\Flash\Flash;

class ControladorAdministradores extends Controller
{
 //Ruta que solo se accedera desde admin/administrador
    public function index()
    {
        //paginamos de ha 3 administradores a la vez en la vista
        $administradores = Administrador::orderBy('id','ASC')->paginate(3);
        //Retornamos la variable junto a sus datos a una vista (vista llamada 'areas')
        return view('admin.administrador.index')->with('administradores', $administradores);

    }

     public function create()
    {
    	return view('admin.administrador.crear');
    }

     public function store(Request $request)
    {
    	//Me muestra todos los datos que me llegan desde la vista : dd($request ->all());
    	$administrador = new Administrador($request->all());
    	$administrador ->password = bcrypt($request->password);
    	$administrador ->save();
    	//dd('Area Creada!!!');

        Flash::success("Se Ha Registrado " . $administrador->nombre . " De Forma Exitosa!!!");
        //Una Vez guarda el area, redirecciono a una ruta
       // return redirect()->route('admin.administrador.index');

    }
}
