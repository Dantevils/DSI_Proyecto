@extends('layouts.app')
@section('Padre', 'Convenios')
@section('Hijo', 'Consultar')


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
				<div class="panel-body">
				<div class="box box-solid">
		           <div class="box-header with-border">
		             <i class="fa fa-book"></i>
		              <h3 class="box-title">Descipcion del Convenio N°.{{$varConvenio->id }}     
 <a href="{{route('pdf.print',$varConvenio->id)}}" class="btn btn-danger"> PDF <span class="fa fa-file-pdf-o col"></span></a>
		              </h3>
		            	</div>
			            	<div class="box-body col-md-6">
			              		<dl>
			              		<dt>Nombre</dt>
				                <dd>{{$varConvenio->nombre_con}}</dd>
				                <dd></dd>
				                <dt>Tipo</dt>
				                <dd>{{$varConvenio->tipo_con}}</dd>
				                <dd></dd>
				                <dt>Area</dt>
				                <dd>{{$varConvenio->area_con}}</dd>
				                <dd></dd>
				                <dt>Estado Actual</dt>
				                <dd>{{$varConvenio->estado_con}}</dd>
				                <dd></dd>
				                <dt>Descipcion</dt>
				                <dd>{{$varConvenio->descripcion_con}}</dd>
				                <dd></dd>
				                <dt>Numero/Folio</dt>
				                <dd>{{$varConvenio->nombre_con}}</dd>
				                <dd></dd>
				                <dt>Fecha de Inicio</dt>
				                <dd>{{$varConvenio->fechini_con}}</dd>
				                <dd></dd>
				                <dt>Fecha de Termino</dt>
				                <dd>{{$varConvenio->fechter_con}}</dd>
				                <dd></dd>

  								

				                </dl>
            				</div>
            				<div class="box-body col-md-6">
			              		<dl>

			              		<dt>Actividades del Convenio</dt>
				                @foreach($varActividad as $varlist)
				                <dd>{{$varlist->descripcion_ac}}</dd>
				                <dd></dd>
								@endforeach
			              		<dt></dt>
			              		<dd></dd>
  								<dt>Instituciones del convenio</dt>
				                @foreach($varInstitucion as $varlist)
				                <dd>{{$varlist->nombre_inst}},  {{$varlist->descripcion_inst}}</dd>
				                <dd></dd>
								@endforeach
								<dt></dt>
								<dd></dd>
								<dt>Objetivos del convenio</dt>
				                @foreach($varObjetivo as $varlist)
				                <dd>{{$varlist->descripcion_obj}}</dd>
				                <dd></dd>
								@endforeach

								<!--Cordinador-->

				                </dl>
            				</div>

            				
          				</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection