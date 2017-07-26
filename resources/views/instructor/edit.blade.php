@extends('layout-app.base')
@section('title','editar categoria')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>editar categoria</h1>
			<hr>
			<ul class="breadcrumb">
				<li><a href="{{ url('category') }}">lista categorias</a></li>
				<li>editar categoria</li>
			</ul>

			@if (count($errors)>0)
				
				<div class="alert alert-danger alert-dismissible" role="alert">
				  	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
					  @foreach($errors->all() as $message)
						<li>{{ $message }}</li>
					  @endforeach
				</div>
			
			@endif
			<hr>
			

			<form action="{{ url('category/'.$cat->id) }}" method="post">
				<div class="form-group">
					{!! csrf_field()  !!}
					{{ method_field('put') }}
					<input type="text" name="name" class="form-control" placeholder="Nombre" value="{{ $cat->name }}">
				</div>
				<div class="form-group">
					<button class="btn btn-success" type="submit">
						<i class="glyphicon glyphicon-send"></i> Modificar
					</button>
				</div>

			</form>
		</div>
	</div>
@endsection
