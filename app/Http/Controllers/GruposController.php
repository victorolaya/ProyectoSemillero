<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Grupo;
use Laracasts\Flash\Flash;
use App\Mentor;
use App\Area;
use App\Http\Requests\GrupoRequest;
class GruposController extends Controller
{   
    /*
    *Metodo que retorna en la vista una lista con todos lod grupos
    *almacenados en la base de datos paginando de a 5 grupos a la vez
    *por seccion.
    */
    public function index()
    {    
        $grupos = Grupo::orderBy('id','ASC')->paginate(5);
        return view('admin.grupo.index')->with('grupos', $grupos);
    }

    /*
    *Metodo que retorna la vista en la cual se puede agregar un nuevo grupo
    */
    public function create()
    {
        $areas = Area::orderBy('nombre','ASC')->lists('nombre', 'id');
        $mentores = Mentor::orderBy('nombres','ASC')->lists('nombres', 'id');
        return view('admin.grupo.crear')->with('areas', $areas)->with('mentores', $mentores);
    }

    /*
    *Metodo mediante el cual guardamos un grupo en la base de datos
    *@Param $request:
    *Trae todos los datos necesarios en formato json para crear un
    *nuevo grupo y guardarlo en la base de datos, al mismo tiempo en 
    *que se notifica mendiante un mensaje flash y se redirecciona a 
    *la vista index grupos
    */
    public function store(GrupoRequest $request)
    {
        $grupo = new Grupo($request->all());
        $grupo ->save();
        Flash::success("Se ha registrado el grupo: " . $grupo->nombre . " de la jornada: " . $grupo->jornada . " de forma exitosa!!!");
        return redirect()->route('admin.grupo.index');
    }

    /*
    *Metodo que retorna la vista para editar un grupo en especifico
    *@Param $id
    *Parametro id por el cual se buscara y se enviara el grupo a la vista
    *para posteriormente ser editado
    */
    public function edit($id)
    {
       $areas = Area::orderBy('nombre','ASC')->lists('nombre', 'id');
       $mentores = Mentor::orderBy('nombres','ASC')->lists('nombres', 'id');
       $grupo = Grupo::find($id);
       return view('admin.grupo.editar')->with('grupo',$grupo)->with('areas',$areas)->with('mentores',$mentores);
    }

    /*
    *Metodo que permite actualizar la informacion de un grupo
    *en la base de datos
    *@Param $request, $id
    *$id por el cual se buscara el grupo a actualizar 
    *$request la informacion que sera modificada en formato json
    */
    public function update(GrupoRequest $request, $id)
    {
        $grupo = Grupo::find($id);
        $grupo->nombre = $request->nombre;
        $grupo->jornada = $request ->jornada;
        $grupo->numero_de_semillas = $request ->numero_de_semillas;
        $grupo->areas_id = $request ->areas_id;
        $grupo->save();
        Flash::success("Se ha EDITADO la informacion del grupo: " . $grupo->nombre . " de la jornada: " . $grupo->jornada . " de forma satisfactoria!!!");
        return redirect()->route('admin.grupo.index');
    }

    /*
    *Metodo que permite la eliminacion de un grupo de la base de datos
    *@param $id
    *$id por el cual se buscara un grupo a eliminar de la base de datos
    */
    public function destroy($id)
    {
        $grupo = Grupo::find($id);
        $grupo->delete();
        Flash::error("El grupo: " . $grupo->nombre . " de la jornada: " . $grupo->jornada . " ha sido ELIMINADO de forma exitosa!!!");
        return redirect()->route('admin.grupo.index');
    }
}
