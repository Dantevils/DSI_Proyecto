<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Objetivo;
use App\Convenio;


class ObjetivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //}
        $var = Objetivo::orderBy('id','ASC')->paginate(10); //Veamos que convine si mostrar el ultimo o el primero
        return view('convenio.objetivo.index',compact('var'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //
        //Pasamos los convenios
        //$varConvenio = Convenio::lists('id'); /*nombre_con*/
        $varConvenio = Convenio::all();
        //dd($varConvenio);
        return view('convenio.objetivo.create',compact('varConvenio')); /*Llamamos a la vista que se encargara de crear*/
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
          $var = new Objetivo($request->all());
        $var->save();
        return redirect()->route('Objetivo.index');
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
            $varObjetivo = Objetivo::findOrFail($id);
        return view('convenio.objetivo.edit',array('varObjetivo'=>$varObjetivo));
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
        $varObjetivo = Objetivo::find($id);
        $varObjetivo->fill($request->all());
        $varObjetivo->save();
        return redirect()->route('Objetivo.index');/*Redirecionamos a ruta*/
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
        $varObjetivo = Objetivo::findOrFail($id);
        $varObjetivo->delete();
        return redirect()->route('Objetivo.index');
    }
}