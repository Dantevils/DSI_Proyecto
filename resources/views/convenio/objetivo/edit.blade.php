<!--Edit de actividades-->

@extends('layouts.app')
@section('Padre', 'Objetivos')
@section('Hijo', 'Editar')
@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Edicion  de Actividades</div>

					<div class="panel-body">


						{!! Form::model($varObjetivo,['route'=>['Objetivo.update',$varObjetivo],'method'=>'PUT','class'=>'form-horizontal']) !!}
				   			
							

  						<div class="form-group col-md-8"></div>

  						<div class="form-group col-md-10">
							{!! Form::label('descripcion_obj', 'Descripcion del objetivo') !!}
							{!! Form::text('descripcion_obj',$varObjetivo->descripcion_obj,['class'=>'form-control','placeholder'=>'Desarrollo Personal','required']) !!}
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