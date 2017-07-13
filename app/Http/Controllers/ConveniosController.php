<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Convenio;

class ConveniosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         //Este metodo lo utilizaremos para mostrar un listado de los convenios.
        $var = Convenio::orderBy('id','ASC')->paginate(10); //Veamos que convine si mostrar el ultimo o el primero
        return view('convenio.index',compact('var'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          return view('convenio.create'); /*Llamamos a la vista que se encargara de crear*/
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
        //dd($request);
        dd('hola cargo');
         $var = new Convenio($request->all());
        $var->save();
        return redirect()->route('Convenio.index');
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
        $varConvenio = Convenio::findOrFail($id);
        return view('convenio.edit',array('varConvenio'=>$varConvenio));
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
        $varConvenio = Convenio::find($id);
        $varConvenio->fill($request->all());
        $varConvenio->save();
        return redirect()->route('Convenio.index');
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
        $varConvenio = Convenio::findOrFail($id);
        $varConvenio->delete();
        return redirect()->route('Convenio.index');
    }

}