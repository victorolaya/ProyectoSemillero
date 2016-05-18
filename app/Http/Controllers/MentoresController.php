<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Mentor;
use Laracasts\Flash\Flash;
use App\Http\Requests\MentorRequest;
use App\Area;
use App\FotoMentor;

class MentoresController extends Controller
{
    /*
    *Metodo que retorna en la vista una lista con todas los mentores
    *almacenados en la base de datos paginando de a 5 mentores a la vez
    *en la vista (secciones)
    *@Param $request:
    *Parametro opcional, estipulado para el filtrado de mentores en la vista
    */
    public function index(Request $request)
    {
        $mentores = Mentor::search($request->nombres)->orderBy('id','ASC')->paginate(5);
        $mentores->each(function($mentores){ $mentores->area;  });
        return view('admin.mentor.index')->with('mentores', $mentores);
    }

    /*
    *Metodo que retorna la vista en la cual se puede agregar un nuevo mentor
    *a esta vista se le envian las areas, para asi seleccionar la respectiva al mentor
    */
    public function create()
    {
        $areas = Area::orderBy('nombre','ASC')->lists('nombre', 'id');
        return view('admin.mentor.crear')->with('areas', $areas);
    }

    /*
    *Metodo mediante el cual guardamos un mentor en la base de datos
    *@Param $request:
    *Trae todos los datos necesarios en formato json para crear un
    *nuevo mentor y guardarlo en la base de datos, al mismo tiempo en 
    *que se notifica mendiante un mensaje flash y se redirecciona a 
    *la vista index mentores
    */
    public function store(Request $request)
    {
        if($request->file('foto'))
        {
          $file = $request->file('foto');
          $nombreImagen = 'foto_mentor_' . time() . '.' . $file->getClientOriginalExtension();
          //Guardamos nuestra imagen del mentor con nombre unico (segundos) en nuestra carpeta imagenes/mentores
          $path = public_path() . '/imagenes/mentores/';
          //Guardo la imagen en la ruta especificada con el nombre especificado
          $file->move($path, $nombreImagen);
        }
        $mentor = new Mentor($request->all());
        $mentor ->save();
        //Guardo la respectiva foto en su tabla
        $foto = new FotoMentor();
        $foto->nombre = $nombreImagen;
        //Se asocia la foto mal respectivo mentor, mediante el metodo habido en el modelo 
        $foto->mentores()->associate($mentor);
        //otra opcion seria: $foto->mentores_id->$mentor->id;
        $foto->save();

       Flash::success("Se ha registrado el mentor " . $mentor->nombres . " de forma exitosa!!!");
       return redirect()->route('admin.mentor.index');
    }

    /*
    *Metodo que retorna la vista para editar un mentor en especifico
    *@Param $id
    *Parametro id por el cual se buscara y se enviara el mentor a la vista
    *para posteriormente ser editado, tambien se envia el area por si esta 
    *tambien se piensa modificar
    */
    public function edit($id)
    {
       $mentor = Mentor::find($id);
       $areas = Area::orderBy('nombre','ASC')->lists('nombre', 'id');
       return view('admin.mentor.editar')->with('mentor',$mentor)->with('areas',$areas);
    }

    /*
    *Metodo que permite actualizar la informacion de un mentor
    *en la base de datos
    *@Param $request, $id
    *$id por el cual se buscara el mentor a actualizar 
    *$request la informacion que sera modificada en formato json
    */
    public function update(Request $request, $id)
    {
        $mentor = Mentor::find($id);
        //Metodo fill() llena los campos con la informacion del mentor
        $mentor->fill($request->all());
        $mentor->save();
        Flash::success("Se ha editado la informacion del mentor " . $mentor->nombres . " de forma satisfactoria!!!");
        return redirect()->route('admin.mentor.index');
    }

    /*
    *Metodo que permite la eliminacion de un mentor de la base de datos
    *@param $id
    *$id por el cual se buscara un mentor a eliminar de la base de datos
    */
    public function destroy($id)
    {
        $mentor = Mentor::find($id);
        $mentor->delete();
        Flash::error("El mentor " . $mentor->nombres . " ha sido ELIMINADO de forma exitosa!!!");
        return redirect()->route('admin.mentor.index');
    }
    
    /*
    *Metodo generador de un reporte en PDF de mentores
    *Este reporte ya esta con una estrucutra definida por un vistapdf
    */
    public function imprimirpdf()
    {
    $mentores = Mentor::all();
    $pdf = \PDF::loadView('admin/mentor/vistapdf',['mentores' => $mentores]);
    return $pdf->download('ReporteMentores-'.time().'.pdf');
    }
}

