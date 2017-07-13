<!--Edit de actividades-->

@extends('layouts.app')

{{-- -
@section('htmlheader_title')
	Creacion de Convenios
@endsection
 --}}


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Edicion  de Actividades</div>

					<div class="panel-body">


						{!! Form::model($varActividad,['route'=>['Actividad.update',$varActividad],'method'=>'PUT','class'=>'form-horizontal']) !!}


						<div class="form-group">
							{!! Form::label('descripcion_ac', 'Descripcion de Actividad') !!}
							{!! Form::text('descripcion_ac',$varActividad->descripcion_ac,['class'=>'form-control','placeholder'=>'tipo','required']) !!}
						</div>
						
						<!--Ver si es necesario tambien modificar la asignacion-->

						<div class="form-group">
							{!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}

						</div>
						{!! Form::close() !!}

					
						
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection