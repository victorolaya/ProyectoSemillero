<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Area;
use Laracasts\Flash\Flash;
use App\Http\Requests\AreaRequest;


class AreasController extends Controller
{

    /*
    *Metodo que retorna en la vista una lista con todas las areas 
    *almacenadas en la base de datos paginando de a 5 areas a la vez
    *en la vista (secciones)
    */
    public function index()
    {
        $areas = Area::orderBy('id','DESC')->paginate(5);
        return view('admin.area.index')->with('areas', $areas);
    }
    /*
    *Metodo que retorna la vista en la cual se puede agregar una nueva area
    */
    public function create()
    {
    	return view('admin.area.crear');
    }
    /*
    *Metodo mediante el cual guardamos un area en la base de datos
    *@Param $request
    *Trae todos los datos necesarios en formato json para crear una
    *nueva area y guardarla en la base de datos, al mismo tiempo en 
    *que se notifica mendiante un mensaje flash y se redirecciona a 
    *la vista index areas
    */
    public function store(AreaRequest $request)
    {
    	$area = new Area($request->all());
    	$area ->save();
      Flash::success("Se ha registrado el area " . $area->nombre . " de forma exitosa!!!");
      return redirect()->route('admin.area.index');
    }
    /*
    *Metodo que retorna la vista para editar una area en especifico
    *@Param $id
    *Parametro id por el cual se buscara y se enviara el area a la vista
    *para posteriormente ser editada
    */
    public function edit($id)
    {
       $area = Area::find($id);
       return view('admin.area.editar')->with('area',$area);
    }
    /*
    *Metodo que permite actualizar la informacion de una area
    *en la base de datos
    *@Param $request, $id
    *$id por el cual se buscara el area a actualizar 
    *$request la informacion que sera modificada en formato json
    */
    public function update(AreaRequest $request, $id)
    {
        $area = Area::find($id);
        //funcion fill, autocompleta los campos con la informacion del area
        $area->fill($request->all());
        $area->save();
        Flash::success("Se ha EDITADO la informacion del area: " . $area->nombre . ", con disponibilidad: " . $area->disponibilidad . ", de forma satisfactoria!!!");
        return redirect()->route('admin.area.index');
    }
    /*
    *Metodo que permite la eliminacion de una area de labase de datos
    *@param $id
    *$id por el cual se buscara una area a eliminar de la base de datos
    */
    public function destroy($id)
    {
        $area = Area::find($id);
        $area->delete();
        Flash::error("El area: " . $area->nombre . ", con disponibilidad: " . $area->disponibilidad . ", ha sido ELIMINADA de forma exitosa!!!");
        return redirect()->route('admin.area.index');
    }


}
