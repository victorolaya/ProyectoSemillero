<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semilla extends Model
{
    
    /**
    *Atributo que representa la tabla en la que se guardara
    *una semilla en la base de datos
    */
    protected $table = "semillas";

    /**Atributo que representa los campos mostrados en formato json 
    *cuando capturamos los datos
    */
    protected $fillable = ['nombre','apellidos','edad','documento','numero','direccion',
    'telefono','celular1','celular2','correoElectronico'];

    /**
    *Representa la relacion muchos a uno con notas 
    *una semillas puede tener varias notas
    */
    public function notas()
    {
    	return $this->hasMany('App\Nota');
    }

    /**
    *Representa la relacion uno a uno con con la foto
    */
    public function foto_semilla()
    {
    	return $this->hasone('App\Foto_Semilla');
    }
    /**
    *Representa la relacion de muchos a muchos con acudientes
    *donde una semillas puede tener varios acudientes
    */
    public function acudientes()
    {
    	return $this->belongsToMany('App\Acudiente');
    }
}
