@extends('layouts.app')
@section('title', 'lista de ambientes')

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>lista de ambientes</h1>
			<hr>
			<a class="btn btn-success" href="{{ url('classroom/create') }}">
				<i class="glyphicon glyphicon-plus"></i> Adicionar
			</a>
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
				
				@foreach($classrooms as $clrs)
					<tr>
						<td>{{ $clrs->id }}</td>
						<td>{{ $clrs->nombre_ambiente }}</td>
						<td>
							<a class="btn btn-default" href="{{ url('classroom/'.$clrs->id) }}">
								consultar
							</a>
							<a class="btn btn-default" href="{{ url('classroom/'.$clrs->id.'/edit') }}">
								editar
							</a>
							<form action="{{ url('classroom/'.$clrs->id) }}" method="post" style="display:inline-block;">
								{{ method_field('delete') }}
								{!! csrf_field()  !!}
								<button type="button" class="btn btn-danger btn-delete-classroom">
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
