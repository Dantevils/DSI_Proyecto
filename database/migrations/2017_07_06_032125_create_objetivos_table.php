<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjetivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

                  Schema::create('objetivos', function (Blueprint $table) {
            $table->increments('id_obj');/*Identificador de institucion unico*/
            $table->string('descripcion_obj');/*Nombre de institucion*/
            $table->integer('id_con')->unsigned();/*clave foranea de convenio*/
           
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('id_con')->references('id_con')->on('convenios')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
         Schema::drop('objetivos');
    }
}
