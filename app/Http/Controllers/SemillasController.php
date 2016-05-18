<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Semilla;
use Laracasts\Flash\Flash;


class SemillasController extends Controller
{
    /*
    *Metodo que returna la vista con todas las semillas
    *almacenados en la base de datos ordenandolas por id
    *de forma ascendente y paginando de 10 semillas
    *en la vista
    *
    */
    public function index(){
      $semillas = Semilla::orderBy('id','ASC')->paginate(10);
      return view('admin.semilla.listarSemillas')->with('semillas',$semillas);
    }

    /*
    *Metodo que retorna la vista para editar una semilla
    *@Param $id
    *Parametro id por el cual se buscara y se enviara a la vista
    *para ser editada la semilla encontrada
    */
    public function edit($id)
    {
       $semilla = Semilla::find($id);
       return view('admin.semilla.editar')->with('semilla',$semilla);
    }

    /*
    *Metodo que permite guardar una semilla en la base de datos
    *@Param $request
    *Trae todos los datos necesarios en formato json para crear una
    *semilla y guardarlo en la base de datos desde la vista del usuario
    */
    public function guardarSemilla(Request $request){
        $semilla = new Semilla($request->all());
        $semilla->save();
        Flash::success("Se ha registrado la semilla de forma exitosa!!!");
        return redirect('/formularios-y-datos-semillero/formulario-de-inscripción-semillas');
    }

    /*
    *Metodo que permite guardar una semilla en la base de datos
    *@Param $request
    *Trae todos los datos necesarios en formato json para crear una semilla 
    * y guardarlo en la base de datos del panel de administracion
    */
    public function store(Request $request){
        $semilla = new Semilla($request->all());
        $semilla->save();
        Flash::success("Se ha registrado la semilla de forma exitosa!!!");
        return redirect('/admin/semillas/');
    }
    /*
    *Metodo que retorna la vista de crear
    *una semilla
    */
    public function create(){
      return view('admin.semilla.crear');
    }

    /*
    *Metodo que permite la eliminacion de una semilla de la
    *base de datos
    *@param $id
    *$id por el cual se buscara una semilla para eliminarlo
    *de la base de datos
    */
    public function destroy($id){
       	$semilla = Semilla::find($id);
       	$semilla->delete();
       	Flash::success("Se ha eliminado la semilla de forma exitosa!!!");
        return redirect('/admin/semillas');
    }

    /*
    *Metodo que permite actualizar la informacion de una semilla
    *de la base de datos
    *@Param $request, $id
    *$id por el cual se buscara la semilla 
    *$request la informacion que sera modificada en formato json
    */
    public function update(Request $request, $id)
    {
        $semilla = Semilla::find($id);
        $semilla->fill($request->all());
        $semilla->save();
        Flash::success("Se ha editado la informacion de la semilla " . $semilla->nombre . " de forma satisfactoria!!!");
        return redirect()->route('admin.semillas.index');
    }

    /*
    *Metodo que retorna un pdf con la informacion de todas las 
    *semillas registradas en la base de datos
    */
    public function imprimirpdf()
    {
        $semillas = Semilla::all();
        $pdf = \PDF::loadView('admin/semilla/vistapdf',['semillas' => $semillas]);
        return $pdf->download('ReporteSemillas-'.time().'.pdf');
    }
}
