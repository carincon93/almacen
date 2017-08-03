@extends('layouts.app')
@section('title', 'Lista de instructores')

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Lista de instructores</h1>
			<hr>
			<a class="btn btn-success" href="{{ url('instructor/create') }}">
				<i class="fa fa-fw fa-plus"></i> Adicionar
			</a>
			<!-- <br>
			<br>
			<form action="{{ url('search' ) }}">
				<input type="text" name="nombre" autocomplete="on">
				<button type="submit">Buscar</button>
			</form> -->
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
						<th>Nombre</th>
						<th>Apellidos</th>
						<th>Acciones</th>
					</tr>

					<tbody class="tbody">

						@foreach($instructors as $inst)
						<tr>
							<td>{{ $inst->id }}</td>
							<td class="text-capitalize">{{ $inst->nombre }}</td>
							<td class="text-capitalize">{{ $inst->apellidos }}</td>
							<td>
								<a class="btn btn-default" href="{{ url('instructor/'.$inst->id) }}">
									<i class="fa fa-fw fa-search"></i>
									Consultar
								</a>
								<a class="btn btn-default" href="{{ url('instructor/'.$inst->id.'/edit') }}">
									<i class="fa fa-fw fa-pencil"></i>
									Editar
								</a>
								<form action="{{ url('instructor/'.$inst->id) }}" method="post" style="display:inline-block;">
									{{ method_field('delete') }}
									{!! csrf_field()  !!}
									<button type="button" class="btn btn-danger btn-delete-instructor">
										<i class="fa fa-fw fa-trash"></i>
										Eliminar
									</button>
								</form>
							</td>
						</tr>
						@endforeach

					</tbody>

				</table>
				{{ $instructors->links() }}
			</div>
		</div>
	</div>
@endsection
