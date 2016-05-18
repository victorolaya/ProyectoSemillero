<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{   
    /**
    *Atributo que representa la tabla en la que se guardara
    *un grupo en la base de datos
    */
    protected $table = "grupos";

    /*
    *Atributo que representa los campos mostrados en formato json 
    *cuando capturamos los datos
    */
    protected $fillable = ['nombre','jornada','numero_de_semillas','areas_id','mentores_id'];

}
