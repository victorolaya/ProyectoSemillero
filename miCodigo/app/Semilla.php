<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semilla extends Model
{
    protected $table = "Semillas";

    protected $fillable = ['nombre','apellidos','edad','documento','direccion',
    'telefono','celular1','celular2','correoElectronico'];
}
