<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Semilla;
use Laracasts\Flash\Flash;


class SemillasController extends Controller
{
    
    public function index(){
      $semillas = Semilla::orderBy('id','ASC')->paginate(10);
      return view('admin.semilla.listarSemillas')->with('semillas',$semillas);
    }

    public function edit($id)
    {
       $semilla = Semilla::find($id);
       return view('admin.semilla.editar')->with('semilla',$semilla);
    }

    public function guardarSemilla(Request $request){
        $semilla = new Semilla($request->all());
        $semilla->save();
        Flash::success("Se ha registrado la semilla de forma exitosa!!!");
        return redirect('/formularios-y-datos-semillero/formulario-de-inscripción-semillas');
    }

    public function destroy($id){
       	$semilla = Semilla::find($id);
       	$semilla->delete();
       	Flash::success("Se ha eliminado la semilla de forma exitosa!!!");
        return redirect('/admin/semillas');
    }

    public function update(Request $request, $id)
    {
       //dd($request->all());
        $semilla = Semilla::find($id);
        //Lleno los campos con la informacion de la semilla
        $semilla->fill($request->all());
        
        $semilla->save();
         Flash::success("Se ha editado la informacion de la semilla " . $semilla->nombre . " de forma satisfactoria!!!");
        //Una Vez editado el usuario, redirecciono a una ruta
       return redirect()->route('admin.semillas.index');
    }
}
