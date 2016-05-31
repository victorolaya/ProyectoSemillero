<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{

    /**
     *Representa los atributos visibles en el request
     *en formato json
     * @var array
     */
    protected $fillable = ['name', 'email', 'password',];

    /**
     *Los atributos que estan ocultos para arreglos
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}