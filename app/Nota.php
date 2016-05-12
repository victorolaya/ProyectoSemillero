<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
     protected $table = "notas";

    /**Los campos fillable son los campos permitidos para mostrar los ibjetos Json,cuando traigamos
    los datos, que datos quiero mostrar, que datos quiero que traiga!*/
    protected $fillable = ['valor','id_semilla'];

    //RELACION MUCHOS A UNO: La misma relacion que en semilla, pero al contrario, una nota solo puede pertenecer a un solo usuario
    public function semilla()
    {
    	return $this->belongsTo('App\Semilla');
    }
}
