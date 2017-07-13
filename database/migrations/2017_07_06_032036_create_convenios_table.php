<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConveniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //


         Schema::create('convenios', function (Blueprint $table) {
            $table->increments('id');/*Identificador de convenio unico*/
            $table->string('tipo_con');/*Tipo de convenio*/
            $table->string('area_con');/*Area de convenio*/
            $table->string('estado_con');/*Estado de convenio*/
            $table->string('nombre_con');/*Nombre de convenio*/
            $table->string('descripcion_con');/*Descripcion de convenio*/
            $table->string('numero_con');/*Numero de decreto convenio*/
            $table->date('fechini_con');
            $table->date('fechter_con');
           
            $table->rememberToken();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('convenios');
    }
}
