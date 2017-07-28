@extends('layouts.app')


@section('Padre', 'Convenios')
@section('Hijo', 'Crear')

@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Creacion de Convenios</div>

					<div class="panel-body">
						{{--t rans('adminlte_lang::message.logged') --}}

						{!! Form::open(['route'=>'Convenio.store','method'=>'POST'])!!} <!--Ruta de almacenamiento del controlador a Store-->
						
						
						<!--Tipo de Convenio-->
						<div class="form-group col-sm-4">
							{!! Form::label('tipo_con', 'Tipo de convenio') !!}
						    {!! Form::text('tipo_con',null,['class'=>'form-control','placeholder'=>'Marco, especifico','required']) !!}
						</div>
				       	<div class="col-sm-4"></div>
				        	<!--Tipo Area-->			
						<div class="form-group col-sm-4">
							{!! Form::label('area_con', 'Tipo de Area') !!}
						    {!! Form::text('area_con',null,['class'=>'form-control','placeholder'=>'Desrrollo','required']) !!}
						</div>
				        
				        <!--Nombre de Convenio-->

						<div class="form-group">
							{!! Form::label('nombre_con', 'Nombre de convenio') !!}
							{!! Form::text('nombre_con',null,['class'=>'form-control','placeholder'=>'nombre','required']) !!}
						</div>

				
						<!--Seccion de fechas-->
						<div class="form-group  col-sm-3">
						{!! Form::label('fechini_con', 'Fecha de inicio del convenio') !!}
						     <div class="input-group date">
						     <div class="input-group-addon">
						     <i class="fa fa-calendar"></i>
						     </div>
						     {!! Form::text('fechini_con',null,['class'=>'form-control pull-right','id'=>'datepicker','placeholder'=>'fecha de termino','required']) !!}
						    <!-- <input type="text" class="form-control pull-right" id="datepicker">-->
						     </div>
						</div>
						<div class="form-group col-sm-6"></div>

						<div class="form-group col-sm-3">
							{!! Form::label('fechter_con', 'Fecha de termino del convenio') !!}
						     <div class="input-group date">
						     <div class="input-group-addon">
						     <i class="fa fa-calendar"></i>
						     </div>
						     {!! Form::text('fechter_con',null,['class'=>'form-control pull-right','id'=>'datepicker2','placeholder'=>'fecha de termino','required']) !!}
						    <!-- <input type="text" class="form-control pull-right" id="datepicker">-->
						     </div>
						</div>
						

						<!--Tipo de estado-->
						<div class="form-group">
							{!! Form::label('estado_con', 'Ingrese Tipo de estado') !!}
							{!! Form::text('estado_con',null,['class'=>'form-control','placeholder'=>'Actividado o Desactivado','required']) !!}
						</div>

						<div class="form-group">
							{!! Form::label('descripcion_con', 'Ingrese Descripcion de convenio') !!}
							{!! Form::textarea('descripcion_con',null,['class'=>'form-control','placeholder'=>'descripcion','required']) !!}
						</div>



						<div class="form-group">
							{!! Form::label('numero_con', 'Ingrese Numero de convenio') !!}
							{!! Form::text('numero_con',null,['class'=>'form-control','placeholder'=>'numero','required']) !!}
						</div>
						{{-- <div class="form-group">
							{!! Form::label('modalidad_con', 'Ingrese la modalidad de convenio') !!}
							{!! Form::text('modalidad_con',null,['class'=>'form-control','placeholder'=>'modalidad','required']) !!}
						</div>--}}
						


					

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
