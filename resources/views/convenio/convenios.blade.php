<!--Vista de consultas de convenios-->
@extends('layouts.app')
@section('Padre', 'Convenios')
@section('Hijo', 'Consultar')

@section('main-content')
	<div class="container spark-screen">
		<div class="row">		
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Listado de Convenios</div>
						<!--<div class="panel-body">-->
							<div class="box-body">
								<table id="example1" class="table table-bordered table-striped">
					                <thead>
					                <tr>
					                 <th>ID</th>
									 <th>Nombre</th>
									 <th>Tipo</th>
									 <th>Area</th>
									 <th>Estado</th>
									 <th>Accion</th>
					                </tr>
					                </thead>
               						 <tbody>
              						@foreach($var as $varlist)
									<tr>
									 <td>{!! $varlist->id !!}</td>
									 <td>{!! $varlist->nombre_con !!}</td>
									 <td>{!! $varlist->tipo_con !!}</td>
									 <td>{!! $varlist->area_con !!}</td>
									 <td>{!! $varlist->estado_con !!}</td>
									<td>		
												
									<!--Boton Editar-->
									 <a href="{{ route('Consulta.show',$varlist->id)}}" class="btn btn-primary"> Ver Mas <span class="glyphicon glyphicon-search"></span></a>

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

