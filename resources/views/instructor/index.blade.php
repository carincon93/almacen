@extends('layout-app.base')
@section('title', 'lista de instructores')

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>lista de instructores</h1>
			<hr>
			<a class="btn btn-success" href="{{ url('instructor/create') }}">
				<i class="glyphicon glyphicon-plus"></i> Adicionar
			</a>
			{{-- <br><br>
			<form action="{{ url('search' ) }}">
				<input type="text" name="nombre" autocomplete="on">
				<button type="submit">Buscar</button>
			</form> --}}
			@if (session('status'))
				<div class="alert alert-success alert-dismissible" role="alert">
				  	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
					  {!!  html_entity_decode(session('status')) !!}
				</div>
			@endif
			
			<br><br>
			<table class="table table-stripped table-bordered table-hover">
				<tr>
					<th>id</th>
					<th>nombre</th>
					<th>apellidos</th>
					<th>acciones</th>
				</tr>

			<tbody class="tbody">
				
				@foreach($instructores as $inst)
					<tr>
						<td>{{ $inst->id }}</td>
						<td>{{ $inst->nombre }}</td>
						<td>{{ $inst->apellidos }}</td>
						<td>
							<a class="btn btn-default" href="{{ url('instructor/'.$inst->id) }}">
								consultar
							</a>
							<a class="btn btn-default" href="{{ url('instructor/'.$inst->id.'/edit') }}">
								editar
							</a>
							<form action="{{ url('instructor/'.$inst->id) }}" method="post" style="display:inline-block;">
								{{ method_field('delete') }}
								{!! csrf_field()  !!}
								<button type="button" class="btn btn-danger btn-delete">
									eliminar
								</button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>

			</table>
			
		</div>
	</div>
@endsection('content')
