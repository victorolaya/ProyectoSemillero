<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/*
* Clase que me representa el modelo de un acudiente de una semilla - NO!!! IMPLEMENTADA AUN
*/
class Acudiente extends Model
{   
    /**
    *Atributo que representa la tabla en la que se guardara
    *un acudiente en la base de datos
    */
     protected $table = "acudiente";

    /*
    *Atributo que representa los campos mostrados en formato json 
    *cuando capturamos los datos
    */
    protected $fillable = ['nombres','apellidos','parentesco',
    'numero_telefono','numero_movil_1','numero_movil_2','direccion',
    'municipio','correo_electronico'];

    /*
    *Relacion Muchos a muchos: Un acudiente puede tener varias semillas
    */
    public function semillas()
    {
    	return $this->belongsToMany('App\Semilla')->withTimesTamps();
    }

}
