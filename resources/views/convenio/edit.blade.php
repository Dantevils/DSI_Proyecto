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
					<div class="panel-heading">Edicion  de Convenios</div>

					<div class="panel-body">


						{!! Form::model($varConvenio,['route'=>['Convenio.update',$varConvenio],'method'=>'PUT','class'=>'form-horizontal']) !!}


						<div class="form-group">
							{!! Form::label('tipo_con', 'Ingrese Tipo de convenio') !!}
							{!! Form::text('tipo_con',$varConvenio->tipo_con,['class'=>'form-control','placeholder'=>'tipo','required']) !!}
						</div>
						
						<div class="form-group">
							{!! Form::label('area_con', 'Ingrese Tipo de Area') !!}
							{!! Form::text('area_con',$varConvenio->area_con,['class'=>'form-control','placeholder'=>'area','required']) !!}
						</div>
						
						<div class="form-group">
							{!! Form::label('estado_con', 'Ingrese Tipo de estado') !!}
							{!! Form::text('estado_con',$varConvenio->estado_con,['class'=>'form-control','placeholder'=>'estado','required']) !!}
						</div>
						
						<div class="form-group">
							{!! Form::label('nombre_con', 'Ingrese Nombre de convenio') !!}
							{!! Form::text('nombre_con',$varConvenio->nombre_con,['class'=>'form-control','placeholder'=>'nombre','required']) !!}
						</div>
						
						<div class="form-group">
							{!! Form::label('descripcion_con', 'Ingrese Descripcion de convenio') !!}
							{!! Form::text('descripcion_con',$varConvenio->descripcion_con,['class'=>'form-control','placeholder'=>'descripcion','required']) !!}
						</div>
						
						<div class="form-group">
							{!! Form::label('numero_con', 'Ingrese Numero de convenio') !!}
							{!! Form::text('numero_con',$varConvenio->nombre_con,['class'=>'form-control','placeholder'=>'numero','required']) !!}
						</div>
					 	
					 	{{-- <div class="form-group">
							{!! Form::label('modalidad_con', 'Ingrese la modalidad de convenio') !!}
							{!! Form::text('modalidad_con',$varConvenio->modalidad_con,['class'=>'form-control','placeholder'=>'modalidad','required']) !!}
						</div>
						 --}}
						<div class="form-group">
							{!! Form::label('fechaini_con', 'Ingrese la fecha de inicio del convenio') !!}
							{!! Form::date('fechaini_con',$varConvenio->fechaini_con,['class'=>'form-control','placeholder'=>'fecha de inicio','required']) !!}
						</div>
						
						<div class="form-group">
							{!! Form::label('fechater_con', 'Ingrese la fecha de termino del convenio') !!}
							{!! Form::date('fechater_con',$varConvenio->fechater_con,['class'=>'form-control','placeholder'=>'fecha de termino','required']) !!}
						</div>


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
