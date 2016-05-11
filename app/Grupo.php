<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
      protected $table = "grupos";

    /**Los campos fillable son los campos permitidos para mostrar los ibjetos Json,cuando traigamos
    los datos, que datos quiero mostrar, que datos quiero que traiga!*/
    protected $fillable = ['nombre','jornada','numero_de_semillas','areas_id','mentores_id'];

     //RELACION MUCHOS A UNO: un Grupo solo puede pertenecer a una Area
    /* public function areas()
    {
    	return $this->belongsTo('App\Area');
    }
    */
}
