@extends('layouts.app')
@section('title', 'Lista de ambientes')

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Lista de ambientes</h1>
			<hr>
			<a class="btn btn-success" href="{{ url('classroom/create') }}">
				<i class="fa fa-fw fa-plus"></i> Adicionar
			</a>
			<div class="form-group">
					<div class="form-group">
						{!! csrf_field()  !!}
						<input type="search" name="nombre_ambiente" class="form-control" placeholder="Buscar" autocomplete="off" id="nombreambiente">
						
					</div>
			</div>
			@if (session('status'))
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
				{!!  html_entity_decode(session('status')) !!}
			</div>
			@endif

			<br>
			<br>
			<div class="table-responsive">
				<table class="table table-stripped table-bordered table-hover">
					<tr>
						<th>id</th>
						<th>Nombre del ambiente</th>
						<th>Acciones</th>
					</tr>

					<tbody class="tbody">

						@foreach($classrooms as $clrs)
						<tr>
							<td>{{ $clrs->id }}</td>
							<td class="text-capitalize">{{ $clrs->nombre_ambiente }}</td>
							<td>
								<a class="btn btn-default" href="{{ url('classroom/'.$clrs->id) }}">
									<i class="fa fa-fw fa-search"></i>
									Consultar
								</a>
								<a class="btn btn-default" href="{{ url('classroom/'.$clrs->id.'/edit') }}">
									<i class="fa fa-fw fa-pencil"></i>
									Editar
								</a>
								<form action="{{ url('classroom/'.$clrs->id) }}" method="post" style="display:inline-block;">
									{{ method_field('delete') }}
									{!! csrf_field()  !!}
									<button type="button" class="btn btn-danger btn-delete-classroom">
										<i class="fa fa-fw fa-trash"></i>
										Eliminar
									</button>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>

				</table>
				{{ $classrooms->links() }}
			</div>

		</div>
	</div>
@endsection
