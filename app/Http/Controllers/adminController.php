<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//LLamo mi modelo de Administrador
use App\Admin;
//Importo laracast flash para la proyeccion de mensajes
use Laracasts\Flash\Flash;

class adminController extends Controller
{
    public function index()
    {
        //paginamos de ha 3 administradores a la vez en la vista
        $admins = Admin::orderBy('id','ASC')->paginate(3);
        //Retornamos la variable junto a sus datos a una vista (vista llamada 'areas')
        return view('admin.administradores.index')->with('administradores', $admins);

    }

    public function login(){
    	return view('admin.login-admin');
    }

    public function postLogin(Request $request){

    	
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
    public function logout(){
        auth()->guard('admin')->logout();
        return redirect('/admin/login');
    }

     public function create()
    {
        return view('admin.administradores.crear');
    }

     //public function store(Request $request) <-- Antiguo, ahora se instancia el nuevo Request creado AdminRequest
    public function store(AdminRequest $request)
    {
        //Me muestra todos los datos que me llegan desde la vista : dd($request ->all());
        $admin = new Admin($request->all());
        $admin ->password = bcrypt($request->password);
        $admin ->save();


        Flash::success("Se ha registrado el area " . $admin->name . " de forma exitosa!!!");
        //Una Vez guarda el area, redirecciono a una ruta
       return redirect()->route('admin.administradores.index');

    }

      public function edit($id)
    {
       $admin = Admin::find($id);
       return view('admin.administradores.editar')->with('admin',$admin);
       // Para probar utilizo el siguiente codigo---> dd($user);
    }


    public function update(Request $request, $id)
    {
       //dd($request->all());
        $admin = Admin::find($id);
        /** Forma antigua para llenar los campos con los valores del usuario, se cambio por fill
        *$user->name = $request->name;
        *$user->email = $request ->email;
        */
        $admin->fill($request->all());
        
        $admin->save();
        //dd($user);
         Flash::success("Se ha editado la informacion del administrador " . $admin->name . " de forma satisfactoria!!!");
        //Una Vez editado el usuario, redirecciono a una ruta
       return redirect()->route('admin.administradores.index');
    }

    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->delete();

          Flash::error("El usuario administrativo " . $admin->name . " ha sido ELIMINADO de forma exitosa!!!");
        //Una Vez elimina el susario, redirecciono a una ruta
       return redirect()->route('admin.administradores.index');
    }
}
