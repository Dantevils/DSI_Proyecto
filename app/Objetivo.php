<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objetivo extends Model
{
    //
       protected $fillable = [
        'id', 'descripcion_obj', 'id_con',
    ];
}
