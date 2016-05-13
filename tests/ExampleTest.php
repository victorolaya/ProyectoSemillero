<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{

    //Validamos que el framework funcione adecuadaente mediante un llamado a su vista (ruta) principañ
      public function testValidacionFramework()
    {

    $this->call('GET', '/');

    $this->assertResponseOk();

    } 

    /**
    * Validamos que el panel de administracion no fue craado
    */
<<<<<<< HEAD
    public function testMethod()
    {
    $this->call('GET', '/admin');
    $this->assertResponseStatus(404);
    }    
=======
>>>>>>> 3ee7d56b88377542113883cdbec0a926248156de

    /**
     * A basic functional test example.
     *
     * @return void
     */
    
    public function testBasicExample()
    {
        /**$this->visit('/')
             ->see('Laravel 5');*/
<<<<<<< HEAD
             $this->assertTrue(true);
=======
            
>>>>>>> 3ee7d56b88377542113883cdbec0a926248156de
             
      /** $this->visit('home')
       ->see('Esto es una Prueba en PHPUnit');*/

    } 
     public function testBasicExample2()
    {
        /**$this->visit('/')
<<<<<<< HEAD
             ->see('Laravel 5');*/
             $this->assertTrue(true);
=======
     
>>>>>>> 3ee7d56b88377542113883cdbec0a926248156de
             
      /** $this->visit('home')
       ->see('Esto es una Prueba en PHPUnit');*/

    } 


}
