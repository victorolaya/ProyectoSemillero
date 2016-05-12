<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
      protected $table = "mentores";

    /**Los campos fillable son los campos permitidos para mostrar los ibjetos Json,cuando traigamos
    los datos, que datos quiero mostrar, que datos quiero que traiga!*/
    protected $fillable = ['nombres','apellidos','documento_de_identidad',
    'numero_documento','edad','fecha_de_nacimiento','direccion','municipio',
    'numero_movil','correo_electronico','eps','rh','areas_id'];

    public function scopeSearch($query, $nombres)
    {
    	return $query->where('nombres', 'LIKE' , "%$nombres%");
    }

   
}
