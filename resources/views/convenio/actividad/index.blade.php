@extends('layouts.app')
@section('Padre', 'Actividades')
@section('Hijo', 'Listado')

@section('main-content')
	<div class="container spark-screen">
		<div class="row">		
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Actividades de Convenios</div>
						<!--<div class="panel-body">-->
							<div class="box-body">
								<table id="example1" class="table table-bordered table-striped">
					                <thead>
					                <tr>
					                 <th>ID</th>
									 <th>Descripcion</th>
									 <th>N° Convenio</th>
									 <th>Accion</th>
					                </tr>
					                </thead>
               						 <tbody>
              						@foreach($var as $varlist)
									<tr>
									 <td>{!! $varlist->id !!}</td>
									 <td>{!! $varlist->descripcion_ac !!}</td>
								     <td>{!! $varlist->id_ac !!}</td>
									<td>					
										<!--Boton Editar-->
									 <a href="{{ route('Actividad.edit',$varlist->id)}}" class="btn btn-warning">Editar <span class="glyphicon glyphicon-pencil"></span></a>

										<!--Boton Eliminar-->
									 <a href="{{ route('destroyActividad.destroy',$varlist->id) }}" onclick="return confirm('¿Seguro que desea eliminar?')" class="btn btn-danger">Eliminar <span class="glyphicon glyphicon-trash"></span></a>
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

