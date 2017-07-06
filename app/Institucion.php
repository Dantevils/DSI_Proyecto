<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    //
     protected $fillable = [
        'id_inst', 'nombre_inst', 'descripcion_inst','id_con',
    ];
}
