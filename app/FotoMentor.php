<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FotoMentor extends Model
{
      protected $table = "fotosmentores";

    /**Los campos fillable son los campos permitidos para mostrar los ibjetos Json,cuando traigamos
    los datos, que datos quiero mostrar, que datos quiero que traiga!*/

    //Los atributs de mentores_id se ponen por si deprinto se llegan a utilizar
    protected $fillable = ['nombre','mentores_id'];

    //Relacion UNO A UNO: una foto pertenece solo a una mentores
    public function mentores()
    {
    	return $this->belongsTo('App\Mentor');
    } 
    
}
