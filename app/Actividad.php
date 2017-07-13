<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    //
      protected $fillable = [
        'id', 'descripcion_ac', 'id_ac', ]; 
        /* Id automatico*
           Descripcion de la actividad
           id_con a el convenio a cual pertenecen*/
}
