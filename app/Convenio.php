<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    //
     protected $fillable = [
        'id_con', 'tipo_con', 'area_con','estado_con','nombre_con','descripcion_con','numero_con','modalidad_con','fechini_con','fechter_con',
        ];

}
