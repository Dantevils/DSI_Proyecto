<!--Edit de actividades-->

@extends('layouts.app')
@section('Padre', 'Instituciones')
@section('Hijo', 'Editar')
@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Edicion  de Actividades</div>

					<div class="panel-body">


						{!! Form::model($varInstitucion,['route'=>['Institucion.update',$varInstitucion],'method'=>'PUT','class'=>'form-horizontal']) !!}
				   			
						<div class="form-group col-md-8"></div>
				        <!--Descripcion de actividad-->

						<div class="form-group col-md-10">
							{!! Form::label('nombre_inst', 'Nombre de la Institucion') !!}
							{!! Form::text('nombre_inst',$varInstitucion->nombre_inst,['class'=>'form-control','placeholder'=>'Universidad del Bio-Bio','required']) !!}
						</div>					

  						<div class="form-group col-md-8"></div>

  						<div class="form-group col-md-10">
							{!! Form::label('descripcion_inst', 'Descripcion de la Institucion') !!}
							{!! Form::text('descripcion_inst',$varInstitucion->descripcion_inst,['class'=>'form-control','placeholder'=>'Publica','required']) !!}
						</div>					

						<div class="form-group col-sm-4">
							{!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}

						</div>
						{!! Form::close() !!}

					
						
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection