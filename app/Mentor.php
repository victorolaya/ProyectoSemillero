<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{   
    /**
    *Atributo que representa la tabla en la que se guardara
    *un mentor en la base de datos
    */
    protected $table = "mentores";

    /*
    *Atributo que representa los campos mostrados en formato json 
    *cuando capturamos los datos
    */
    protected $fillable = ['nombres','apellidos','documento_de_identidad',
    'numero_documento','edad','fecha_de_nacimiento','direccion','municipio',
    'numero_movil','correo_electronico','eps','rh','areas_id'];

    /* 
    * Funcion que me permite realizar le filtrado de mentores en la vista
    */
    public function scopeSearch($query, $nombres)
    {
    	return $query->where('nombres', 'LIKE' , "%$nombres%");
    }

   
}
