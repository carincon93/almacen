@extends('layout-app.base')
@section('title', 'lista de ambientes')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>lista de ambientes</h1>
			<hr>
			<a class="btn btn-success" href="{{ url('ambiente/create') }}">
				<i class="glyphicon glyphicon-plus"></i> Adicionar
			</a>
			<br><br>
			{{-- <form class="form-inline" action="{{ url('ambiente/search') }}" method="post">
				<div class="form-group">
					{!! csrf_field()  !!}
					<input type="search" name="name" class="form-control" placeholder="Buscar" autocomplete="off" id="name">
					
				</div>
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
					<th>nombre del ambiente</th>
					<th>acciones</th>
				</tr>

			<tbody class="tbody">
				
				@foreach($ambientes as $amb)
					<tr>
						<td>{{ $amb->id }}</td>
						<td>{{ $amb->nombre_ambiente }}</td>
						<td>
							<a class="btn btn-default" href="{{ url('ambiente/'.$amb->id) }}">
								consultar
							</a>
							<a class="btn btn-default" href="{{ url('ambiente/'.$amb->id.'/edit') }}">
								editar
							</a>
							<form action="{{ url('ambiente/'.$amb->id) }}" method="post" style="display:inline-block;">
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
