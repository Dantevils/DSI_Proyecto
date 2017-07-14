<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Convenio;
use App\Actividad;
use App\Institucion;
use App\Objetivo;
use App\User;
use Illuminate\Support\Facades\DB;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $var = Convenio::orderBy('id','ASC')->paginate(10); //Veamos que convine si mostrar el ultimo o el primero
        return view('convenio.convenios',compact('var'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $varConvenio = Convenio::findOrFail($id);
        $varActividad = DB::table('actividads')->where('id_ac',$id)->get();
        $varInstitucion = DB::table('institucions')->where('id_con',$id)->get();
        $varObjetivo = DB::table('objetivos')->where('id_con',$id)->get();
       
        //$varUser = User::findOrFail($id);


        return view('convenio.showConvenio',array('varConvenio'=>$varConvenio , 'varActividad'=>$varActividad , 'varInstitucion'=>$varInstitucion , 'varObjetivo'=>$varObjetivo));


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
    }
}
