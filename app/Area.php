<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
	/**
    *Atributo que representa la tabla en la que se guardara
    *una area en la base de datos
    */
     protected $table = "areas";

  	/*
	*Atributo que representa los campos mostrados en formato json 
    *cuando capturamos los datos
    */
    protected $fillable = ['nombre','disponibilidad'];

    /*
    *Representa la relacion muchos a uno con mentores 
    *un area puede tener varios mentores
    */
    public function mentores()
    {
    	return $this->hasMany('App\Mentor');
    }

     /*
    *Representa la relacion muchos a uno con grupos 
    *un area puede tener varios grupos
    */
    public function grupos()
    {
    	return $this->hasMany('App\Grupo');
    }
}
