<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//LLamo mi modelo de semilla
use App\User;

//Importo laracast flash para la proyeccion de mensajes
use Laracasts\Flash\Flash;

//Rerencio mi propio request personalizado para su posterior uso.
use App\Http\Requests\UsuarioRequest;

class ControladorUsuarios extends Controller
{
     public function index()
    {
        //paginamos de ha 3 administradores a la vez en la vista
        $users = User::orderBy('id','ASC')->paginate(3);
        //Retornamos la variable junto a sus datos a una vista (vista llamada 'areas')
        return view('admin.user.index')->with('users', $users);

    }

     public function create()
    {
    	return view('admin.user.crear');
    }

     //public function store(Request $request) <-- Antiguo, ahora se instancia el nuevo Request creado UsuarioRequest
    public function store(UsuarioRequest $request)
    {
    	//Me muestra todos los datos que me llegan desde la vista : dd($request ->all());
    	$user = new User($request->all());
    	$user ->password = bcrypt($request->password);
    	$user ->save();


        Flash::success("Se ha registrado el area " . $user->name . " de forma exitosa!!!");
        //Una Vez guarda el area, redirecciono a una ruta
       return redirect()->route('admin.user.index');

    }

      public function edit($id)
    {
       $user = User::find($id);
       return view('admin.user.editar')->with('user',$user);
       // Para probar utilizo el siguiente codigo---> dd($user);
    }


    public function update(Request $request, $id)
    {
       //dd($request->all());
        $user = User::find($id);
        /** Forma antigua para llenar los campos con los valores del usuario, se cambio por fill
        *$user->name = $request->name;
        *$user->email = $request ->email;
        */
        $user->fill($request->all());
        
        $user->save();
        //dd($user);
         Flash::success("Se ha editado la informacion del administrador " . $user->name . " de forma satisfactoria!!!");
        //Una Vez editado el usuario, redirecciono a una ruta
       return redirect()->route('admin.user.index');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

          Flash::error("El usuario administrativo " . $user->name . " ha sido ELIMINADO de forma exitosa!!!");
        //Una Vez elimina el susario, redirecciono a una ruta
       return redirect()->route('admin.user.index');
    }
}
