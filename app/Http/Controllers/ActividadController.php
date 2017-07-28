<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Actividad; /*Modelo de Actividad*/
use App\Convenio;



class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       // $var = Actividad::all();
     //   dd($var);
        $var = Actividad::orderBy('id','ASC')->paginate(10); //Veamos que convine si mostrar el ultimo o el primero
        return view('convenio.actividad.index',compact('var'));
        //return view('convenio.actividad.index');/*Redirecionamos a Vista */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Pasamos los convenios
        //$varConvenio = Convenio::lists('id'); /*nombre_con*/
        $varConvenio = Convenio::all();
        //dd($varConvenio);
        return view('convenio.actividad.create',compact('varConvenio')); /*Llamamos a la vista que se encargara de crear*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       // dd($request);
        $var = new Actividad($request->all());
        $var2 = $var->id_ac+1; 
        $var->id_ac = $var2;
        $var->save();
        return redirect()->route('Actividad.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $varActividad = Actividad::findOrFail($id);
        return view('convenio.actividad.edit',array('varActividad'=>$varActividad));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $varActividad = Actividad::find($id);
        $varActividad->fill($request->all());
        $varActividad->save();
        return redirect()->route('Actividad.index');/*Redirecionamos a ruta*/


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $varActividad = Actividad::findOrFail($id);
        $varActividad->delete();
        return redirect()->route('Actividad.index');
    }
}
