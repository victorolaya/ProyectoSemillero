<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//LLamo mi modelo de Grupo
use App\Grupo;

//Importo laracast flash para la proyeccion de mensajes
use Laracasts\Flash\Flash;

use App\Mentor;

use App\Area;

class ControladorGrupos extends Controller
{
     public function index()
    {
        //paginamos de ha 5 grupos a la vez en la vista
        $grupos = Grupo::orderBy('id','ASC')->paginate(5);
        //Retornamos la variable junto a sus datos a una vista (vista llamada 'grupos')

        return view('admin.grupo.index')->with('grupos', $grupos);
    }

     public function create()
    {
        $areas = Area::orderBy('nombre','ASC')->lists('nombre', 'id');
        $mentores = Mentor::orderBy('nombres','ASC')->lists('nombres', 'id');
        //Si hubiese otra entonces se realizaria lo mismo
        return view('admin.grupo.crear')->with('areas', $areas)->with('mentores', $mentores);
        
    }

     public function store(Request $request)
    {
        //Me muestra todos los datos que me llegan desde la vista : dd($request ->all());
        $grupo = new Grupo($request->all());
        $grupo ->save();


        Flash::success("Se ha registrado el grupo: " . $grupo->nombre . " de la jornada: " . $grupo->jornada . " de forma exitosa!!!");
        //Una Vez guarda el area, redirecciono a una ruta
       return redirect()->route('admin.grupo.index');

    }

      public function edit($id)
    {
       $grupo = Grupo::find($id);
       return view('admin.grupo.editar')->with('grupo',$grupo);
       // Para probar utilizo el siguiente codigo---> dd($grupo);
    }


    public function update(Request $request, $id)
    {
       //dd($request->all());
        $grupo = Grupo::find($id);
        $grupo->nombre = $request->nombre;
        $grupo->jornada = $request ->jornada;
        $grupo->numero_de_semillas = $request ->numero_de_semillas;
        $grupo->areas_id = $request ->areas_id;
        $grupo->save();
        //dd($grupo);
         Flash::success("Se ha EDITADO la informacion del grupo: " . $grupo->nombre . " de la jornada: " . $grupo->jornada . " de forma satisfactoria!!!");
        //Una Vez editado el usuario, redirecciono a una ruta
       return redirect()->route('admin.grupo.index');
    }

    public function destroy($id)
    {
        $grupo = Grupo::find($id);
        $grupo->delete();

          Flash::error("El grupo: " . $grupo->nombre . " de la jornada: " . $grupo->jornada . " ha sido ELIMINADO de forma exitosa!!!");
        //Una Vez elimina el grupo, redirecciono a una ruta
       return redirect()->route('admin.grupo.index');
    }
}
