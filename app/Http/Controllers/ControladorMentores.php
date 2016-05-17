<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//LLamo mi modelo de Mentor
use App\Mentor;

//Importo laracast flash para la proyeccion de mensajes
use Laracasts\Flash\Flash;

//Rerencio mi propio request personalizado para su posterior uso.
use App\Http\Requests\MentorRequest;

//referencio las areas, debido a la llave foranea para con mentores
use App\Area;

//referencio las fotomentores, debido a la llave foranea para con mentores
use App\FotoMentor;

class ControladorMentores extends Controller
{
    //$request entra como parametro opcional, mediante este se puede realizar el filtrado de mentores
     public function index(Request $request)
    {
        //paginamos de ha 3 administradores a la vez en la vista
        $mentores = Mentor::search($request->nombres)->orderBy('id','ASC')->paginate(5);

        $mentores->each(function($mentores){
          $mentores->area;
        });
        //Retornamos la variable junto a sus datos a una vista (vista llamada 'mentores')
        return view('admin.mentor.index')->with('mentores', $mentores);

    }

     public function create()
    {
        $areas = Area::orderBy('nombre','ASC')->lists('nombre', 'id');
        //Si hubiese otra entonces se realizaria lo mismo
        return view('admin.mentor.crear')->with('areas', $areas);
    }

    public function store(MentorRequest $request)
    {

        //Manipulacion de Imagenes
        if($request->file('foto'))
        {
          $file = $request->file('foto');
          $nombreImagen = 'foto_mentor_' . time() . '.' . $file->getClientOriginalExtension();
          //Guardamos nuestra imagen del mentor con nombre unico (segundos) en nuestra carpeta imagenes/mentores
          $path = public_path() . '/imagenes/mentores/';
          //Guardo la imagen en la ruta especificada con el nombre especificado
          $file->move($path, $nombreImagen);
        }
        //Me muestra todos los datos que me llegan desde la vista : dd($request ->all());
        $mentor = new Mentor($request->all());
        
        $mentor ->save();

        //Guardo la respectiva foto en su tabla
        $foto = new FotoMentor();
        $foto->nombre = $nombreImagen;
        //Asocio la foto mal respectivo mentor, mediante el metodo habidpo en el modelo 
        $foto->mentores()->associate($mentor);
        //$foto->mentores_id->$mentor->id;
        $foto->save();

        Flash::success("Se ha registrado el mentor " . $mentor->nombres . " de forma exitosa!!!");
        //Una Vez guarda el mentor, redirecciono a una ruta
       return redirect()->route('admin.mentor.index');
    }

      public function edit($id)
    {
       $mentor = Mentor::find($id);
       $areas = Area::orderBy('nombre','ASC')->lists('nombre', 'id');
       return view('admin.mentor.editar')->with('mentor',$mentor)->with('areas',$areas);
    }

    public function update(Request $request, $id)
    {
       //dd($request->all());
        $mentor = Mentor::find($id);
        //Lleno los campos con la informacion del mentor
        $mentor->fill($request->all());
        
        $mentor->save();
         Flash::success("Se ha editado la informacion del mentor " . $mentor->nombres . " de forma satisfactoria!!!");
        //Una Vez editado el usuario, redirecciono a una ruta
       return redirect()->route('admin.mentor.index');
    }

    public function destroy($id)
    {
        $mentor = Mentor::find($id);
        $mentor->delete();

          Flash::error("El mentor " . $mentor->nombres . " ha sido ELIMINADO de forma exitosa!!!");
        //Una Vez elimina el susario, redirecciono a una ruta
       return redirect()->route('admin.mentor.index');
    }

    public function imprimirpdf()
    {
      //para poner en el controlador, con \ antes de PDF (\PDF) para no tener conflictos con el namespace
    $mentores = Mentor::all();
    //Mando un arreglo de mentores "mentores"
    $pdf = \PDF::loadView('admin/mentor/vistapdf',['mentores' => $mentores]);
    return $pdf->download('ReporteMentores-'.time().'.pdf');
    }
}

