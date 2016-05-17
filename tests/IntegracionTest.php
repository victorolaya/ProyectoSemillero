<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class IntegracionTest extends TestCase
{
 	//Validamos que el framework funcione adecuadaente mediante un llamado a su vista (ruta) principañ
    public function testValidacionFramework()
    {
    $this->call('GET', '/');
    $this->assertResponseOk();
    } 

    //Validando el logeo de un administrativo
	public function testLogin(){
		$this->visit('admin/login')->type("admin@gmail.com","email")->type("123456","password")->press('Login')->visit('admin');
	}

	//Validando la el index de administrativos (Listarlos)
	public function testListarAdmnistrativos(){
		$this->visit('admin')->visit('admin');
	}

	
	//Validando la el index de areas (Listar las Areas)
	/*
	public function testRegistrarAdministrador(){
		//$this->visit('admin')->press('Registrar Administrador')->visit('admin/administradores/create');
		//$this->visit('admin')->click('Registrar Administrador')->visit('admin/administradores/create');
        $this->visit('admin')->type('')->press('Areas')->visit('admin/area');
	}
	*/

	/*public function testAgregarArea()
	{
		$this->visit('admin/area/create')->type("Robotica","nombre")->type("Si","disponibilidad")->press('Agregar')->see("Se ha registrado el area Robotica de forma exitosa!!!");
	}*/


}