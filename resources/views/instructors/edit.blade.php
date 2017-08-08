@extends('layouts.app')

@section('title','Editar instructor')

@section('form-search')
<ul class="breadcrumb">
	<li><a href="{{ url('/admin/instructor') }}" class="btn-link">Lista de instructores</a></li>
	<li>Editar instructor</li>
</ul>
@endsection

@section('content')
	@if (count($errors)>0)
	<div class="alert alert-danger alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
		@foreach($errors->all() as $message)
		<li>{{ $message }}</li>
		@endforeach
	</div>

	@endif
	<div class="col-md-8">
		<div class="card-form">
			<form action="{{ url('/admin/instructor/'.$dataInstructor->id) }}" method="POST">
				{!! csrf_field()  !!}
				{{ method_field('put') }}
				<div class="form-group">
					<input type="text" name="nombre" class="form-control" value="{{ $dataInstructor->nombre }}">
				</div>
				<div class="form-group">
					<input type="text" name="apellidos" class="form-control" value="{{ $dataInstructor->apellidos }}">
				</div>
				<div class="form-group">
					<input type="number" name="numero_documento" class="form-control" value="{{ $dataInstructor->numero_documento }}">
				</div>
				<div class="form-group">
					<input type="text" name="area" class="form-control" value="{{ $dataInstructor->area }}">
				</div>
				<div class="form-group">
					<input type="number" name="ip" class="form-control" value="{{ $dataInstructor->ip }}">
				</div>
				<div class="form-group">
					<input type="number" name="telefono" class="form-control" value="{{ $dataInstructor->telefono }}">
				</div>
				<div class="form-group">
					<input type="number" name="celular" class="form-control" value="{{ $dataInstructor->celular }}">
				</div>
				<div class="form-group">
					<input type="email" name="email" class="form-control" value="{{ $dataInstructor->email }}">
				</div>
				<div class="form-group">
					<select name="instructor_type_id" class="form-control text-capitalize">
						@foreach($instructor_type as $it)
						<option value="{{ $it->id }}" {{ $it->id == $dataInstructor->instructor_type_id ? 'selected="selected"' : '' }}>{{ $it->tipo_instructor }}</option>
						@endforeach
					</select>
				</div>
				<button class="btn btn-success" type="submit">
					<i class="fa fa-fw fa-paper-plane"></i>
					Modificar
				</button>
			</form>
		</div>

	</div>
	<div class="col-md-4">
		<h3><i class="fa fa-fw fa-pencil"></i> Editar Instructor</h3>
		<p>
			Diligencia este formulario para editar el instructor.
		</p>
		<blockquote class="note note-info">
			Los campos que tienen * (asterisco) son obligatorios.
		</blockquote>
	</div>
@endsection
