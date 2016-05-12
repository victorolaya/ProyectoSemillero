<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotosmentoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotosmentores', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nombre', 30);
            $table->integer('mentores_id')->unsigned();

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
        Schema::drop('fotosmentores');
    }
}
