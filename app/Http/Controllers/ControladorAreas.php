<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//LLamo mi modelo de Area
use App\Area;
//Importo laracast flash para la proyeccion de mensajes
use Laracasts\Flash\Flash;
//Rerencio mi propio request personalizado para su posterior uso.
use App\Http\Requests\AreaRequest;

class ControladorAreas extends Controller
{

    //Ruta que solo se accedera desde admin/area
    public function index()
    {
    //dd('text');
        //paginamos de ha 5 areas a la vez en la vista
        $areas = Area::orderBy('id','DESC')->paginate(5);
        //Retornamos la variable junto a sus datos a una vista (vista llamada 'areas')
        return view('admin.area.index')->with('areas', $areas);

    }

     public function create()
    {
    	return view('admin.area.crear');
    }

     public function store(AreaRequest $request)
    {
    	//Me muestra todos los datos que me llegan desde la vista : dd($request ->all());
    	$area = new Area($request->all());
    	$area ->save();
    	//dd('Area Creada!!!');

        Flash::success("Se ha registrado el area " . $area->nombre . " de forma exitosa!!!");
        //Una Vez guarda el area, redirecciono a una ruta
        return redirect()->route('admin.area.index');

    }

      public function edit($id)
    {
       $area = Area::find($id);
       return view('admin.area.editar')->with('area',$area);
       // Para probar utilizo el siguiente codigo---> dd($user);
    }

    public function update(Request $request, $id)
    {
       //dd($request->all());
        $area = Area::find($id);
        //Autocompleto los campos con los respectivos valores del Area
        $area->fill($request->all());
        
        $area->save();
        //dd($user);
         Flash::success("Se ha EDITADO la informacion del area: " . $area->nombre . ", con disponibilidad: " . $area->disponibilidad . ", de forma satisfactoria!!!");
        //Una Vez editado el area, redirecciono a una ruta
       return redirect()->route('admin.area.index');
    }

    public function destroy($id)
    {
        $area = Area::find($id);
        $area->delete();

        Flash::error("El area: " . $area->nombre . ", con disponibilidad: " . $area->disponibilidad . ", ha sido ELIMINADA de forma exitosa!!!");
        //Una Vez eliminada el area, me redirijo a el listado en index
       return redirect()->route('admin.area.index');
    }


}
