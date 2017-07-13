<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Institucion;
use App\Convenio;



class InstitucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    $var = Institucion::orderBy('id','ASC')->paginate(10); //Veamos que convine si mostrar el ultimo o el primero
        return view('convenio.institucion.index',compact('var'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //Pasamos los convenios
        //$varConvenio = Convenio::lists('id'); /*nombre_con*/
        $varConvenio = Convenio::all();
        //dd($varConvenio);
        return view('convenio.institucion.create',compact('varConvenio')); /*Llamamos a la vista que se encargara de crear*/
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
        //
        //dd($request);
        $var = new Institucion($request->all());
        $var->save();
        return redirect()->route('Institucion.index');
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
          $varInstitucion = Institucion::findOrFail($id);
        return view('convenio.institucion.edit',array('varInstitucion'=>$varInstitucion));
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
         $varInstitucion = Institucion::find($id);
        $varInstitucion->fill($request->all());
        $varInstitucion->save();
        return redirect()->route('Institucion.index');/*Redirecionamos a ruta*/

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
         $varInstitucion = Institucion::findOrFail($id);
        $varInstitucion->delete();
        return redirect()->route('Institucion.index');
    }
}