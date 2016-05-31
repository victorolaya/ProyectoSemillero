<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
     protected $table = "areas";

    /**Los campos fillable son los campos permitidos para mostrar los ibjetos Json,cuando traigamos
    los datos, que datos quiero mostrar, que datos quiero que traiga!*/
    protected $fillable = ['nombre','disponibilidad'];

     //RELACION MUCHOS A UNO: Una area puede tener varios mentores
    public function mentores()
    {
    	return $this->hasMany('App\Mentor');
    }
}
