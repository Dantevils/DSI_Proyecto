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
					<div class="panel-heading">Creacion de Convenios</div>

					<div class="panel-body">
						{{--t rans('adminlte_lang::message.logged') --}}

						{!! Form::open(['route'=>'Convenio.store','method'=>'POST'])!!} <!--Ruta de almacenamiento del controlador a Store-->
						<div class="form-group">
							{!! Form::label('tipo_con', 'Ingrese Tipo de convenio') !!}
							{!! Form::text('tipo_con',null,['class'=>'form-control','placeholder'=>'tipo','required']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('area_con', 'Ingrese Tipo de Area') !!}
							{!! Form::text('area_con',null,['class'=>'form-control','placeholder'=>'area','required']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('estado_con', 'Ingrese Tipo de estado') !!}
							{!! Form::text('estado_con',null,['class'=>'form-control','placeholder'=>'estado','required']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('nombre_con', 'Ingrese Nombre de convenio') !!}
							{!! Form::text('nombre_con',null,['class'=>'form-control','placeholder'=>'nombre','required']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('descripcion_con', 'Ingrese Descripcion de convenio') !!}
							{!! Form::text('descripcion_con',null,['class'=>'form-control','placeholder'=>'descripcion','required']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('numero_con', 'Ingrese Numero de convenio') !!}
							{!! Form::text('numero_con',null,['class'=>'form-control','placeholder'=>'numero','required']) !!}
						</div>
						{{-- <div class="form-group">
							{!! Form::label('modalidad_con', 'Ingrese la modalidad de convenio') !!}
							{!! Form::text('modalidad_con',null,['class'=>'form-control','placeholder'=>'modalidad','required']) !!}
						</div>--}}
						<div class="form-group">
							{!! Form::label('fechaini_con', 'Ingrese la fecha de inicio del convenio') !!}
							{!! Form::date('fechaini_con',null,['class'=>'form-control','placeholder'=>'fecha de inicio','required']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('fechater_con', 'Ingrese la fecha de termino del convenio') !!}
							{!! Form::date('fechater_con',null,['class'=>'form-control','placeholder'=>'fecha de termino','required']) !!}
						</div>



						<!--Seccion de Botton-->
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


{{-- 
--}}