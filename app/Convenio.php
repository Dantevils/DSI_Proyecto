<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    //
     protected $fillable = [
        'id', 'tipo_con','id_cord', 'area_con','estado_con','nombre_con','descripcion_con','numero_con','modalidad_con','fechini_con','fechter_con',
        ];

}
