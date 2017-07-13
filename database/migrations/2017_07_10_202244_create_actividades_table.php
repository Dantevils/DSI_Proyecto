<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

            Schema::create('actividads', function (Blueprint $table) {
            $table->increments('id');/*Identificador de actividad unico*/
            $table->string('descripcion_ac');/*Descripcion de actividad*/
            $table->integer('id_ac')->unsigned();/*clave foranea de convenio*/
           
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('id_ac')->references('id')->on('convenios')->onDelete('cascade');/*Ver si esto puede generar algun problema a las migraciones*/
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
         Schema::drop('actividads');
    }
}
