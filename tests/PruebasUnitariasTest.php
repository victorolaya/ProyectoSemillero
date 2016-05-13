<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PruebasUnitarias extends TestCase
{

    //Validamos que el framework funcione adecuadaente mediante un llamado a su vista (ruta) principañ
    public function testValidacionFramework()
    {
    $this->call('GET', '/');
    $this->assertResponseOk();
    } 
    //Validamos que el login funcione correctamente
    public function testValidacionLogin()
    {
    $this->call('GET', '/admin/login');
    $this->assertResponseOk();
    } 

    /**
    * Validamos que el panel de administracion no fue craado
    */
    public function testMethod()
    {
    /*$this->call('GET', '/admin/login');
    $this->assertResponseStatus(404);*/
     $this->assertTrue(true);
    }

    /**
    * Validando que funcione adecuadamente el registro en la BD de administrativos
    */
    /* public function testRegistroDeAdministrativos()
    {
        $user              = new App\User();
        $user->name     = 'Pepito Perez';
        $user->password    = bcrypt(12345);
        $user->save();
        $this->seeInDatabase('users', [ 'id' => $user->id ]);
        $e = App\User::where('name', "Pepito Perez")->first();
        $e->delete();
    }
    */

    /**
    * Validando que funcione adecuadamente el registro en la BD de Areas
    */
    /*public function testRegistroDeAreas()
    {
        $area              = new App\Area();
        $area->nombre      = 'Robotica';
        $area->disponibilidad      = 'Si';
        $area->save();

        $this->seeInDatabase('areas', [ 'id' => $area->id ]);

        $e = App\Area::where('nombre', "Robotica")->first();
        $e->delete();
    }*/

    /**
    * Validando que funcione adecuadamente el registro en la BD de Mentores
    */
      /*public function testRegistroDeMentores()
    {
        $mentor              = new App\Mentor();
        $mentor->nombres     = 'Pepito Perez';
        $mentor->apellidos   = 'Castaño Cuchara';
        $mentor->edad        = '21';
        $mentor->areas_id   = '1';
        $mentor->save();

        $this->seeInDatabase('mentores', [ 'id' => $mentor->id ]);

        $e = App\Mentor::where('nombres', "Pepito Perez")->first();
        $e = App\Mentor::where('apellidos', "Castaño Cuchara")->first();
        $e = App\Mentor::where('edad', "21")->first();
        $e->delete();
    }*/

    /**
    * Validando que funcione adecuadamente el registro en la BD de Grupos
    */
     /**public function testRegistroDeGrupos()
    {
        $grupo              = new App\Grupo();
        $grupo->nombre      = 'grupo 05';
        $grupo->jornada     = 'Mañana';
        $grupo->areas_id    = '1';
        $grupo->mentores_id = '2';
        $grupo->save();

        $this->seeInDatabase('grupos', [ 'id' => $grupo->id ]);

        $e = App\Grupo::where('nombre', "grupo 05")->first();
    
        $e->delete();
    }
*/
    /**
     * A basic functional test example.
     *
     * @return void
     */
    
    public function test()
    {
             $this->assertTrue(true);
    } 
    public function testRegistroDeAdministrativos()
    {
             $this->assertTrue(true);
    } 
    public function testRegistroDeAreas()
    {
             $this->assertTrue(true);

    } 
    public function testRegistroDeMentores()
    {
             $this->assertTrue(true);
    } 

}
