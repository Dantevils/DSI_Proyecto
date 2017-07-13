


@extends('layouts.app')
@section('Padre', 'Objetivos')
@section('Hijo', 'Listado')
@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Listado de Objetivos</div>

					<div class="panel-body">



						<div class="container-fluid">
							<table class="table table-bordered">
								<th>ID</th>
								<th>Objetivo</th>
								<th>N° Convenio</th>
								<tbody>
								
									@foreach($var as $varlist)
									<tr>
										<td>{!! $varlist->id !!}</td>
										<td>{!! $varlist->descripcion_obj !!}</td>
										<td>{!! $varlist->id_con !!}</td>
								
										<td>
										<!--Boton Editar y asignacion de ruta-->
										<a href="{{route('Objetivo.edit',$varlist->id)}}" class="btn btn-warning">Editar<span class="glyphicon glyphicon-copy"></span></a>


										<!--Boton Editar-->
										<a href="{{route('destroyObjetivo.destroy',$varlist->id)}}" onclick="return confirm('¿Seguro que desea eliminar?')" class="btn btn-danger">Eliminar<span class="glyphicon glyphicon-trash"></span></a>
										
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



   <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.0
                  </td>
                  <td>Win 95+</td>
                  <td>5</td>
                  <td>C</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
@endsection

