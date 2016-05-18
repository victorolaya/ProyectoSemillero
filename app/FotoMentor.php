<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FotoMentor extends Model
{   
    /**
    *Atributo que representa la tabla en la que se guardara
    *una foto perteneciente a un mentor en la base de datos
    */
    protected $table = "fotosmentores";

    /*
    *Atributo que representa los campos mostrados en formato json 
    *cuando capturamos los datos
    */
    protected $fillable = ['nombre','mentores_id'];
    
     /*
    *Representa la relacion uno a uno con mentores 
    *un mentor puede tener solo una foto
    */
    public function mentores()
    {
    	return $this->belongsTo('App\Mentor');
    } 
    
}
