<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Admin;
use Laracasts\Flash\Flash;
use App\Http\Requests\AdminRequest;

class AdminController extends Controller
{

    /*
    *Metodo que retorna la vista con todos los administradores 
    *almacenados en la base de datos paginando de 3 administrador
    *en la vista
    *
    */
    public function index()
    {
        $admins = Admin::orderBy('id','ASC')->paginate(3);
        return view('admin.administradores.index')->with('administradores', $admins);

    }

    /*
    *Metodo que retorna la vista para ser logeado
    */
    public function login()
    {
    	return view('admin.login-admin');
    }

    /*
    *Metodo que permite el login de una administrador
    *@param $request
    *Trae en formato json la informacion necesaria para
    *la validacion del login
    */
    public function postLogin(Request $request)
    {

    	$validator = validator($request->all(), [
    		'email' => 'required|min:3|max:100',
    		'password' => 'required|min:3|max:100',
    	]);
    	
    	if($validator->fails()){
    		return redirect('/admin/login')
    		->withErrors($validator)
    		->withInput();
    	}

    	$credentials = ['email'=>$request->get('email'),
    	'password'=> $request->get('password')];


    	if(Auth()->guard('admin')->attempt($credentials)){
    		return redirect('/admin');
    	}
    	else{
    		return redirect('/admin/login')
    		->withErrors(['errores' => 'Login invalido'])
    		->withInput();
    	}
    }
    /*
    *Metodo que desauntetica a un administrador
    */
    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect('/admin/login');
    }
    /*
    *Metodo que retorna la vista de crear
    *un administrador
    */
     public function create()
    {
        return view('admin.administradores.crear');
    }
    
    /*
    *Metodo que permite guardar un administrador en la base de datos
    *@Param $request
    *Trae todos los datos necesarios en formato json para crear un 
    *administrador y guardarlo en la base de datos
    */
    public function store(Request $request)
    {
        $admin = new Admin($request->all());
        $admin ->password = bcrypt($request->password);
        $admin ->save();

        Flash::success("Se ha registrado el area " . $admin->name . " de forma exitosa!!!");
        return redirect()->route('admin.administradores.index');
    }

    /*
    *Metodo que retorna la vista para editar una administrador
    *@Param $id
    *Parametro id por el cual se buscara y se enviara a la vista
    *para ser editado el administrador encontrado
    */
    public function edit($id)
    {
       $admin = Admin::find($id);
       return view('admin.administradores.editar')->with('admin',$admin);
    }

    /*
    *Metodo que permite actualizar la informacion de un administrador
    *de la base de datos
    *@Param $request, $id
    *$id por el cual se buscara el administrador 
    *$request la informacion que sera modificada en formato json
    */
    public function update(Request $request, $id)
    {
        $admin = Admin::find($id);
        $admin->fill($request->all());
        
        $admin->save();
         Flash::success("Se ha editado la informacion del administrador " . $admin->name . " de forma satisfactoria!!!");
       return redirect()->route('admin.administradores.index');
    }

    /*
    *Metodo que permite la eliminacion de un administrador de la
    *base de datos
    *@param $id
    *$id por el cual se buscara un administrador para eliminarlo
    *de la base de datos
    */
    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->delete();

        Flash::error("El usuario administrativo " . $admin->name . " ha sido ELIMINADO de forma exitosa!!!");
        return redirect()->route('admin.administradores.index');
    }
}
