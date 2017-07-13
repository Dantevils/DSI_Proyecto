<!--Index de actividades-->


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
					<div class="panel-heading">Actividades de Convenios</div>

					<div class="panel-body">



						<div class="container-fluid">
							<table class="table table-bordered">
								<th>ID</th>
								<th>Descripcion</th>
								<th>N° Convenio</th>
								<tbody>
								
									@foreach($var as $varlist)
									<tr>
										<td>{!! $varlist->id !!}</td>
										<td>{!! $varlist->descripcion_ac !!}</td>
										<td>{!! $varlist->id_ac !!}</td>
								
										<td>
										<!--Boton Editar y asignacion de ruta-->
										<a href="{{route('Actividad.edit',$varlist->id)}}" class="btn btn-warning">Editar<span class="glyphicon glyphicon-copy"></span></a>


										<!--Boton Editar-->
										<a href="{{route('destroyActividad.destroy',$varlist->id)}}" onclick="return confirm('¿Seguro que desea eliminar?')" class="btn btn-danger">Eliminar<span class="glyphicon glyphicon-trash"></span></a>
										
										</td>
									</tr>
									@endforeach

							
								</tbody>
							</table>
							{{-- <div class="text-center">{!! $var->render() !!}</div> --}}
						</div>



					</div>
				</div>
			</div>
		</div>
	</div>
@endsection