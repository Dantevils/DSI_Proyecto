<!--Vista de administrador para entregar permisos-->
@extends('layouts.app')
@section('Padre', 'Permisos de usuarios')
@section('Hijo', 'Modificar')



@section('main-content')
	<div class="container spark-screen">
		<div class="row">		
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Permisos de usuario</div>
						<!--<div class="panel-body">-->
							<div class="box-body">
								<table id="example1" class="table table-bordered table-striped">
					                <thead>
					                <tr>
					                 <th>Nombre</th>
									 <th>Correo</th>
									 <th>Tipo</th>
									 <th>Accion</th>
					                </tr>
					                </thead>
               						 <tbody>
              						@foreach($var as $varlist)
									<tr>
								    <td>{!! $varlist->name !!}</td>
								    <td>{!! $varlist->email !!}</td>
								    <td>
								    	{!! Form::open(['route'=>'Cordinador.store','method'=>'POST'])!!}
										{!! Form::select('tipo', ['administrador' => 'administrador', 'cordinador' => 'cordinador','usuario' =>'usuario' ]); !!}
								    </td>
									<td>					
										{!! Form::submit('Permitir',['class'=>'btn btn-success']) !!}
										{!! Form::close() !!}
									
									</td>
									</tr>
									@endforeach
            				    	 </tbody>
              					</table>
							</div>
					</div>
				</div>
			</div>
		</div>
@endsection


<!---

Form::select('tipo', ['administrador' => 'administrador', 'cordinador' => 'cordinador','usuario' =>'usuario' ],null, ['class'=>'select form-control','required'])


-->