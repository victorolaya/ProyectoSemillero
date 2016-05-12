<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Cviebrock\EloquentSluggable\SluggableInterface;
//use Cviebrock\EloquentSluggable\SluggableTrait;

//class Semilla extends Model implements SluggableInterface
class Semilla extends Model
{
    
   /* use SluggableTrait;

     protected $sluggable = [
        'build_from' => 'nombres',
        'save_to'    => 'slug',
          ];
    */
    protected $table = "semillas";

    /**Los campos fillable son los campos permitidos para mostrar los ibjetos Json,cuando traigamos
    los datos, que datos quiero mostrar, que datos quiero que traiga!*/
    protected $fillable = ['nombre','apellidos','edad','documento','numero','direccion',
    'telefono','celular1','celular2','correoElectronico'];

    //RELACION MUCHOS A UNO: Una semilla puede tener varias notas
    public function notas()
    {
    	return $this->hasMany('App\Nota');
    }

    //Relacion UNO A UNO: Una semilla solo tiene una foto
    public function foto_semilla()
    {
    	return $this->hasone('App\Foto_Semilla');
    }

    //Relacion Muchos a muchos: una semilla puede tener varios acudientes
    public function acudientes()
    {
    	return $this->belongsToMany('App\Acudiente');
    }
}
