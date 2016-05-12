<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMentoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentores', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nombres', 30);
            $table->String('apellidos', 30);
            $table->enum('documento_de_identidad',['TI','CC'])->default('CC');
            $table->String('numero_documento', 15);
            $table->integer('edad');
            $table->date('fecha_de_nacimiento');
            $table->String('direccion', 60);
            $table->String('municipio', 30);
            $table->String('numero_movil', 10);
            $table->String('correo_electronico', 60);
            $table->String('eps', 30);
            $table->String('rh', 5);
            $table->integer('areas_id')->unsigned();

            $table->foreign('areas_id')->references('id')->on('areas')->onDelete('cascade');
            
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
        Schema::drop('mentores');
    }
}
