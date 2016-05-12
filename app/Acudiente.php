<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acudiente extends Model
{
     protected $table = "acudiente";

    /**Los campos fillable son los campos permitidos para mostrar los ibjetos Json,cuando traigamos
    los datos, que datos quiero mostrar, que datos quiero que traiga!*/
    protected $fillable = ['nombres','apellidos','parentesco',
    'numero_telefono','numero_movil_1','numero_movil_2','direccion',
    'municipio','correo_electronico'];

      //Relacion Muchos a muchos: Un acudiente puede tener varias semillas
    public function semillas()
    {
    	return $this->belongsToMany('App\Semilla')->withTimesTamps();
    }

}
