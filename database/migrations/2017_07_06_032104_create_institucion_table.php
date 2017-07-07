<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitucionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('instituciones', function (Blueprint $table) {
            $table->increments('id_inst');/*Identificador de institucion unico*/
            $table->string('nombre_inst');/*Nombre de institucion*/
            $table->string('descripcion_inst');/*Descripcion de la institucion*/
            $table->integer('id_con')->unsigned();/*clave foranea de convenio*/
           
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('id_con')->references('id')->on('convenios')->onDelete('cascade');/*Revisar esto si puede generar algun problema a las miraciones*/
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
        Schema::drop('instituciones');
          
    }
}
