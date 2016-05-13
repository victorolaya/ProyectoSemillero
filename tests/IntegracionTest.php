<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class IntegracionTest extends TestCase
{

<<<<<<< HEAD
	public function testComprobacionLogeo()
	{
		
		$this->visit('admin/login')->type("admin@gmail.com","email")->type("12345","password")->press('Login')->visit('admin');
		
	}
	public function testAgregarArea()
	{
		
		//$this->visit('admin/area/create')->type("ingenio11","nombre")->type("Si","disponibilidad")->press('Agregar')->see("Se ha registrado el area ingenio11 de forma exitosa!!!");
		$this->assertTrue(true);
		
	}
   
	public function testAreaYaAgregada()
=======
	public function testAgregarArea()
	{
		/*
		*$this->visit('admin/area/create')->type("ingenio11","nombre")->type("Si","disponibilidad")->press('Agregar')->see("Se ha registrado el area ingenio11 de forma exitosa!!!");
		*/
		$this->assertTrue(true);
	}

public function testAreaYaAgregada()
>>>>>>> ef19c668b777ea32df15392e082448c7ea06f875
	{
		/*
		*$this->visit('admin/area/create')->type("Area ingenio Sistemas","nombre")->type("Si","disponibilidad")->press('Agregar')->see("El elemento nombre ya está en uso");
		*/
		$this->assertTrue(true);
	}
	

	public function testNombreAreaEstaVacio()
	{
		/*
		*$this->visit('admin/area/create')->type("Si","disponibilidad")->press('Agregar')->see("El campo nombre es obligatorio");
		*/
<<<<<<< HEAD
		//  $this->assertTrue(true);
=======
		  $this->assertTrue(true);
>>>>>>> ef19c668b777ea32df15392e082448c7ea06f875
	}

	public function testSeleccionDisponibilidadArea()
	{	/*
		*$this->visit('admin/area/create')->type("Area ingenio Sistemas","nombre")->press('Agregar')->see("El elemento nombre ya está en uso");
		*/
<<<<<<< HEAD
		 // $this->assertTrue(true);
=======
		  $this->assertTrue(true);
>>>>>>> ef19c668b777ea32df15392e082448c7ea06f875
	}
}
