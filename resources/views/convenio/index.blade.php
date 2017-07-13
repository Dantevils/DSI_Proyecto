@extends('layouts.app')

{{-- -
@section('htmlheader_title')
	Creacion de Convenios
@endsection
 --}}
@section('Padre', 'Convenios')
@section('Hijo', 'Listado')


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Creacion de Convenios</div>

					<div class="panel-body">



						<div class="container-fluid">
							<table class="table table-bordered">
								<th>ID</th>
								<th>Nombre</th>
								<th>Tipo</th>
								<th>Area</th>
								<th>Estado</th>
								<th>Descripcion</th>
								<th>Numero</th>
								<th>Modalidad</th>
								<th>Inicio</th>
								<th>Termino</th>
								<th>Accion</th>
								<tbody>
									@foreach($var as $varlist)
									<tr>
										<td>{!! $varlist->id !!}</td>
										<td>{!! $varlist->nombre_con !!}</td>
										<td>{!! $varlist->tipo_con !!}</td>
										<td>{!! $varlist->area_con !!}</td>
										<td>{!! $varlist->estado_con !!}</td>
										<td>{!! $varlist->descripcion_con !!}</td>
										<td>{!! $varlist->numero_con !!}</td>
										<td>{!! $varlist->modalidad_con !!}</td>
										<td>{!! $varlist->fechini_con !!}</td>
										<td>{!! $varlist->fechter_con !!}</td>
										<td>
											
											
										<!--Boton Editar y asignacion de ruta-->
										<a href="{{ route('Convenio.edit',$varlist->id)}}" class="btn btn-warning">Editar<span class="glyphicon glyphicon-copy"></span></a>


										<!--Boton Editar-->
										<a href="{{ route('destroyConvenio.destroy',$varlist->id) }}" onclick="return confirm('¿Seguro que desea eliminar?')" class="btn btn-danger">Eliminar<span class="glyphicon glyphicon-trash"></span></a>
										
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
							<div class="text-center">{!! $var->render() !!}</div>
						</div>



					</div>
				</div>
			</div>
		</div>
	</div>
@endsection