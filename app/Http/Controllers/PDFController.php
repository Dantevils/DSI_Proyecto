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

class PDFController extends Controller
{
    //

 
  public function invoice($id) 
    {
        $data = $this->getData();
        $date = date('Y-m-d');
        $invoice = "5555";

        $varConvenio = Convenio::findOrFail($id);
        $varActividad = DB::table('actividads')->where('id_ac',$id)->get();
        $varInstitucion = DB::table('institucions')->where('id_con',$id)->get();
        $varObjetivo = DB::table('objetivos')->where('id_con',$id)->get();


        $view =  \View::make('pdf.pdf', compact('data', 'date', 'invoice' ,'varConvenio','varActividad','varInstitucion','varObjetivo'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('invoice');
    }

    public function getData() 
    {
        $data =  [
            'quantity'      => '1' ,
            'description'   => 'some ramdom text',
            'price'   => '500',
            'total'     => '500'
        ];
        return $data;
    }

}
