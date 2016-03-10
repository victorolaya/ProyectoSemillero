<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaSemilla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semilla', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nombre', 25);
            $table->String('apellidos', 60);
            $table->integer('edad');
            $table->enum('Documento de Identidad',['T.I','CC.', 'CE','Otro']);
            $table->String('direccion', 60);
            $table->Integer('telefono');
            $table->Integer('celular1');
            $table->Integer('celular2');
            $table->String('correoElectronico',60);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('semilla');
    }
}
