<!--Create de Actividades-->
@extends('layouts.app')


@section('Padre', 'Objetivos')
@section('Hijo', 'Crear')
@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Creacion y asignacion de Objetivos</div>

					<div class="panel-body">
						
						<!--Formulario de creacion de actividad-->
						{!! Form::open(['route'=>'Objetivo.store','method'=>'POST'])!!} <!--Ruta de almacenamiento del controlador a Store   [$varConvenio->id => $varConvenio->nombre_con]
-->						
						
						<!--Convenio--> <!--Revisar el deface en el select-->
						<div class="form-group col-sm-4">
						{!! Form::label('id_con', 'Asignar a convenio') !!}
	 				    {!!Form::select('id_con', $varConvenio->pluck('nombre_con'), $varConvenio->pluck('id'),['class' => 'select form-control', 'required'])!!} 
  						</div> 

				
				       	<div class="col-sm-4"></div>
				   			
						<div class="form-group col-md-8"></div>
				        <!--Descripcion de actividad-->

						<div class="form-group col-md-10">
							{!! Form::label('descripcion_obj', 'Detalle del Objetivo') !!}
							{!! Form::textarea('descripcion_obj',null,['class'=>'form-control','placeholder'=>'Incercion Laboral','required']) !!}
						</div>					

  						<div class="form-group col-md-8"></div>



						<!--Seccion de Botton-->
						<div class="form-group col-md-8">
						{!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
						</div>

						{!! Form::close() !!}
 

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
