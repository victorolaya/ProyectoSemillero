<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nombre');
            $table->enum('jornada',['Mañana','Tarde'])->default('Mañana');
            $table->integer('numero_de_semillas')->default('0');
            $table->integer('areas_id')->unsigned();
            $table->integer('mentores_id')->unsigned();

            $table->foreign('areas_id')->references('id')->on('areas')->onDelete('cascade');
            $table->foreign('mentores_id')->references('id')->on('mentores')->onDelete('cascade');

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
        Schema::drop('grupos');
    }
}
