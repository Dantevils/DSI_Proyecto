<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');


});
/************************************************/
/*Rutas para Convenios*/
Route::resource('Convenio','ConveniosController');

Route::get('Convenio/{id}/destroy',['uses'=>'ConveniosController@destroy','as'=>'destroyConvenio.destroy']); /*Asignaremos esta ruta para la eliminacion*/

/***********************************************/
/*Rutas para actividades*/
Route::resource('Actividad','ActividadController');

Route::get('Actividad/{id}/destroy',['uses'=>'ActividadController@destroy','as'=>'destroyActividad.destroy']); /*Asignaremos esta ruta para la eliminacion*/