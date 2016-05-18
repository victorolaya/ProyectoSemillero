<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PruebasUnitarias extends TestCase
{

    /*
    *Validamos que el framework funcione adecuadaente mediante un llamado a su vista (ruta) principal
    */
    public function testValidacionFramework()
    {
    $this->call('GET', '/');
    $this->assertResponseOk();
    } 

    /*
    * Validamos que el sistema de logeo funcione adecuadamente
    */
    public function testLogin()
    {
        $this->visit('admin/login')->type("admin@gmail.com","email")->type("123456","password")->press('Login')->visit('admin');
    }

    /**
    * Validando que funcione adecuadamente el registro en la BD de administrativos
    */
     public function testRegistroDeAdministrativos()
    {
        $admin              = new App\Admin();
        $admin->name     = 'Pepito Perez';
        $admin->password    = bcrypt(12345);
        $admin->save();
        $this->seeInDatabase('admins', [ 'id' => $admin->id ]);
      
    }

    /*
    * Validando que funcione adecuadamente la eliminacion en la BD de administrativos
    */
    public function testEliminacionDeAdministrador()
    {
        $a = App\Admin::where('name', "Pepito Perez")->first();
        $a->delete();
        $this->notSeeInDatabase('admins', [ 'id' => $a->id ]);
    }

    /**
    * Validando que funcione adecuadamente el registro en la BD de Areas
    */
    public function testRegistroDeAreas()
    {
        $area              = new App\Area();
        $area->nombre      = 'Robotica';
        $area->disponibilidad      = 'Si';
        $area->save();
        $this->seeInDatabase('areas', [ 'id' => $area->id ]);
    }

    /**
    * Validando que funcione adecuadamente el registro en la BD de Mentores
    */
    public function testRegistroDeMentores()
    {
        $mentor              = new App\Mentor();
        $mentor->nombres     = 'Pepito Perez';
        $mentor->apellidos   = 'Castaño Cuchara';
        $mentor->edad        = '21';
        $mentor->areas_id   = '1';
        $mentor->save();
        $this->seeInDatabase('mentores', [ 'id' => $mentor->id ]);
    }

    /**
    * Validando que funcione adecuadamente el registro en la BD de Grupos
    */
    public function testRegistroDeGrupos()
    {
        //Verificamos si el area se encuentra registrada
        $area = App\Area::where('nombre', "Robotica")->first();
        $this->seeInDatabase('areas', [ 'id' => $area->id ]);


        //Verificamos que el mentor se encuentre registrado en la BD
        $mentor = App\Mentor::where('nombres', "Pepito Perez")->first();
        $mentor = App\Mentor::where('apellidos', "Castaño Cuchara")->first();
        $mentor = App\Mentor::where('edad', "21")->first();
        $this->seeInDatabase('mentores', [ 'id' => $mentor->id ]);

        $grupo              = new App\Grupo();
        $grupo->nombre      = 'grupo 05';
        $grupo->jornada     = 'Mañana';
        $grupo->areas_id    = $area->id;
        $grupo->mentores_id = $mentor->id;
        $grupo->save();
        $this->seeInDatabase('grupos', [ 'id' => $grupo->id ]);
    }

     /**
    * Validando que funcione adecuadamente el registro en la BD de semillas
    */
    public function testRegistroDeSemillas()
    {
        $semilla              = new App\Semilla();
        $semilla->nombre     = 'Pepito Perez';
        $semilla->apellidos   = 'Castaño Cuchara';
        $semilla->edad        = '21';
        $semilla->save();
        $this->seeInDatabase('semillas', [ 'id' => $semilla->id ]);
    }

    /*
    * Validando que funcione adecuadamente el eliminar en la BD de semillas
    */
    public function testElminacionDeSemillas()
    {
        $semilla = App\Semilla::where('nombre', "Pepito Perez")->first();
        $semilla->delete();
        $this->notSeeInDatabase('semillas', [ 'id' => $semilla->id ]);
    }

      /*
    * Validando que funcione adecuadamente el eliminar en la BD de grupos
    */
    public function testEliminacionDeGrupos()
    {
        $grupo = App\Grupo::where('nombre', "grupo 05")->first();
        $grupo->delete();
        $this->notSeeInDatabase('grupos', [ 'id' => $grupo->id ]);
    }

    /*
    * Validando que funcione adecuadamente el eliminar en la BD de mentores
    */
    public function testEliminacionDeMentores()
    {
        $mentor = App\Mentor::where('nombres', "Pepito Perez")->first();
        $mentor = App\Mentor::where('apellidos', "Castaño Cuchara")->first();
        $mentor = App\Mentor::where('edad', "21")->first();
        $mentor->delete();
        $this->notSeeInDatabase('mentores', [ 'id' => $mentor->id ]);
    }

    /*
    * Validando que funcione adecuadamente el eliminar en la BD de areas
    */
    public function testElminacionDeArea()
    {
        $area = App\Area::where('nombre', "Robotica")->first();
        $area->delete();
        $this->notSeeInDatabase('grupos', [ 'id' => $area->id ]);
    }
 
}
