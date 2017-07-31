@extends('layouts.app')
@section('title','Adicionar instructor')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h1>Adicionar instructor</h1>
				<hr>
				<ul class="breadcrumb">
					<li><a href="{{ url('instructor') }}">lista de instructores</a></li>
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
						<div class="form-group">
							<input type="text" name="nombre" class="form-control" placeholder="nombre">
						</div>
						<div class="form-group">
							<input type="text" name="apellidos" class="form-control" placeholder="apellidos">
						</div>
						<div class="form-group">
							<input type="number" name="numero_documento" class="form-control" placeholder="numero_documento">
						</div>
						<div class="form-group">
							<input type="text" name="area" class="form-control" placeholder="area">
						</div>
						<div class="form-group">
							<input type="number" name="ip" class="form-control" placeholder="ip">
						</div>
						<div class="form-group">
							<input type="number" name="telefono" class="form-control" placeholder="telefono">
						</div>
						<div class="form-group">
							<input type="number" name="celular" class="form-control" placeholder="celular">
						</div>
						<div class="form-group">
							<input type="email" name="email" class="form-control" placeholder="correo">
						</div>
						<div class="form-group">
							<select name="instructor_type_id" class="form-control">
								<option value="">selecciones tipo de contrato</option>
								@foreach($instructor_type as $it)
								<option value="{{ $it->id }}" >{{ $it->tipo_instructor }}</option>
								@endforeach
							</select>
						</div>
					</div>
					<button class="btn btn-success" type="submit">
						<i class="fa fa-fw fa-paper-plane"></i>
						Guardar
					</button>
				</form>
			</div>
		</div>

	</div>
@endsection
