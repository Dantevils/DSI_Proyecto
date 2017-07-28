<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
     <title>Imprimir</title>
   <link rel="stylesheet" href="{{ asset('/css/pdf.css') }}" media="all" />
   <link rel="stylesheet" href="{{ asset('/css/AdminLTE.css') }}" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="{{ asset('/css/logo.png') }}">
    </div>
      <h1>{{$varConvenio->nombre_con}}</h1>


 <div class="box-header with-border">
                 <i class="fa fa-book"></i>
                  <h3 class="box-title">Descipcion del Convenio N°.{{$varConvenio->id }} </h3>



  <div class="box-body col-md-4">
                        <dl>
                        <dt><strong>Nombre</strong></dt>
                        <dd>{{$varConvenio->nombre_con}}</dd>
                        <dd></dd>
                        <dt><strong>Tipo</strong></dt>
                        <dd>{{$varConvenio->tipo_con}}</dd>
                        <dd></dd>
                        <dt><strong>Area</strong></dt>
                        <dd>{{$varConvenio->area_con}}</dd>
                        <dd></dd>
                        <dt><strong>Estado Actual</strong></dt>
                        <dd>{{$varConvenio->estado_con}}</dd>
                        <dd></dd>
                        <dt><strong>Descipcion</strong></dt>
                        <dd>{{$varConvenio->descripcion_con}}</dd>
                        <dd></dd>
                        <dt><strong>Numero/Folio</strong></dt>
                        <dd>{{$varConvenio->nombre_con}}</dd>
                        <dd></dd>
                        <dt><strong>Fecha de Inicio</strong></dt>
                        <dd>{{$varConvenio->fechini_con}}</dd>
                        <dd></dd>
                        <dt><strong>Fecha de Termino</strong></dt>
                        <dd>{{$varConvenio->fechter_con}}</dd>
                        <dd></dd>

                  

                        </dl>
                    </div>
                    <div class="box-body col-md-4">
                        <dl>

                        <dt><strong>Actividades del Convenio</strong></dt>
                        @foreach($varActividad as $varlist)
                        <dd>{{$varlist->descripcion_ac}}</dd>
                        <dd></dd>
                @endforeach
                        <dt></dt>
                        <dd></dd>
                  <dt><strong>Instituciones del convenio</strong></dt>
                        @foreach($varInstitucion as $varlist)
                        <dd>{{$varlist->nombre_inst}},  {{$varlist->descripcion_inst}}</dd>
                        <dd></dd>
                @endforeach
                <dt></dt>
                <dd></dd>
                <dt><strong>Objetivos del convenio</strong></dt>
                        @foreach($varObjetivo as $varlist)
                        <dd>{{$varlist->descripcion_obj}}</dd>
                        <dd></dd>
                @endforeach

                <!--Cordinador-->

                        </dl>
                    </div>

</div>

    </header>
    <main>
    </main>
    <footer>
      Todos los datos realcionado con este convenio
    </footer>
  </body>


</html>