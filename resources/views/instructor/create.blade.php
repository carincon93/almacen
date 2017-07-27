@extends('layout-app.base')
@section('title','adicionar instructor')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>adicionar instructor</h1>
			<hr>
			<ul class="breadcrumb">
				<li><a href="{{ url('instructor') }}">lista instructor</a></li>
				<li>adicionar instructor</li>
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
			

			<form action="{{ url('instructor') }}" method="post">
				<div class="form-group">
					{!! csrf_field()  !!}
					<input type="text" name="nombre" class="form-control" placeholder="nombre">
					<br><br>
					<input type="text" name="apellidos" class="form-control" placeholder="apellidos">
					<br><br>
					<input type="number" name="documento" class="form-control" placeholder="documento">
					<br><br>
					<input type="text" name="area" class="form-control" placeholder="area">
					<br><br>
					<input type="number" name="ip" class="form-control" placeholder="ip">
					<br><br>
					<input type="number" name="celular" class="form-control" placeholder="celular">
					<br><br>
					<input type="email" name="correo" class="form-control" placeholder="correo">
					<br><br>
				</div>
				<div class="form-group">
					<button class="btn btn-success" type="submit"> Guardar
					</button>
				</div>

			</form>
		</div>
	</div>
@endsection
