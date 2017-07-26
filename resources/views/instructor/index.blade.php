@extends('layout-app.base')
@section('title', 'lista de categorias')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>lista de categorias</h1>
			<hr>
			@if (session('status'))
				<div class="alert alert-success alert-dismissible" role="alert">
				  	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
					  {!!  html_entity_decode(session('status')) !!}
				</div>
			@endif
			<a class="btn btn-success" href="{{ url('category/create') }}">
				<i class="glyphicon glyphicon-plus"></i> Adicionar
			</a>
			<br><br>
			<table class="table table-stripped table-bordered table-hover">
				<tr>
					<th>id</th>
					<th>nombre</th>
					<th>acciones</th>
				</tr>


			@foreach($categories as $cat)
				<tr>
					<td>{{ $cat->id }}</td>
					<td>{{ $cat->name }}</td>
					<td>
						<a class="btn btn-default" href="{{ url('category/'.$cat->id.'/edit') }}">
							<i class="glyphicon glyphicon-pencil"></i>
						</a>
						<form action="{{ url('category/'.$cat->id) }}" method="post" style="display:inline-block;">
							{{ method_field('delete') }}
							{!! csrf_field()  !!}
							<button type="button" class="btn btn-danger btn-delete">
								<i class="glyphicon glyphicon-trash"></i>
							</button>
						</form>
						{{-- <a class="btn btn-danger" href="{{ url('') }}">
							<i class="glyphicon glyphicon-trash"></i>
						</a> --}}
					</td>
				</tr>
			@endforeach

			</table>
			
		</div>
	</div>
@endsection('content')
