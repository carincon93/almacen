@extends('layouts.app')

@section('title','Editar instructor')

@section('navbar-top')
<ul class="breadcrumb">
	<li><a href="{{ url('/admin/instructor') }}" class="btn-link">Lista de instructores</a></li>
	<li>Editar instructor</li>
</ul>
@endsection

@section('content')
	<div class="col-md-8">
		<div class="card-form">
			<form action="{{ url('/admin/instructor/'.$dataInstructor->id) }}" method="POST" enctype="multipart/form-data">
				@if(!empty($dataInstructor->imagen))
				<img src="{{ asset($dataInstructor->imagen) }}" alt="" class="img-responsive img-instructor">
				@else
				<img src="{{ asset('/images/instructors/perdefault.png') }}" alt="" class="img-responsive img-instructor">
				@endif

				{!! csrf_field()  !!}
				{{ method_field('put') }}
				<div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
					<label for="nombre" class="control-label">Nombre *</label>
					<input type="text" name="nombre" class="form-control" value="{{ $dataInstructor->nombre }}">
					@if ($errors->has('nombre'))
						<span class="help-block">
							{{ $errors->first('nombre') }}
						</span>
					@endif
				</div>
				<div class="form-group{{ $errors->has('apellidos') ? ' has-error' : '' }}">
					<label for="apellidos" class="control-label">Apellidos *</label>
					<input type="text" name="apellidos" class="form-control" value="{{ $dataInstructor->apellidos }}">
					@if ($errors->has('apellidos'))
						<span class="help-block">
							{{ $errors->first('apellidos') }}
						</span>
					@endif
				</div>
				<div class="form-group{{ $errors->has('numero_documento') ? ' has-error' : '' }}">
					<label for="numero_documento" class="control-label">Número de documento *</label>
					<input type="number" name="numero_documento" class="form-control" value="{{ $dataInstructor->numero_documento }}">
					@if ($errors->has('numero_documento'))
						<span class="help-block">
							{{ $errors->first('numero_documento') }}
						</span>
					@endif
				</div>
				<div class="form-group{{ $errors->has('area') ? ' has-error' : '' }}">
					<label for="area" class="control-label">Área/Especialidad *</label>
					<input type="text" name="area" class="form-control" value="{{ $dataInstructor->area }}">
					@if ($errors->has('area'))
						<span class="help-block">
							{{ $errors->first('area') }}
						</span>
					@endif
				</div>
				<div class="form-group{{ $errors->has('ip') ? ' has-error' : '' }}">
					<label for="ip" class="control-label">IP *</label>
					<input type="number" name="ip" class="form-control" value="{{ $dataInstructor->ip }}">
					@if ($errors->has('ip'))
						<span class="help-block">
							{{ $errors->first('ip') }}
						</span>
					@endif
				</div>
				<div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
					<label for="telefono" class="control-label">
						Número de télefono
					</label>
					<input type="number" name="telefono" class="form-control" value="{{ $dataInstructor->telefono }}">
					@if ($errors->has('telefono'))
						<span class="help-block">
							{{ $errors->first('telefono') }}
						</span>
					@endif
				</div>
				<div class="form-group{{ $errors->has('celular') ? ' has-error' : '' }}">
					<label for="celular" class="control-label">
						Número de celular *
					</label>
					<input type="number" name="celular" class="form-control" value="{{ $dataInstructor->celular }}">
					@if ($errors->has('celular'))
						<span class="help-block">
							{{ $errors->first('celular') }}
						</span>
					@endif
				</div>
				<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					<label for="email" class="control-label">Correo electrónico *</label>
					<input type="email" name="email" class="form-control" value="{{ $dataInstructor->email }}">
					@if ($errors->has('email'))
						<span class="help-block">
							{{ $errors->first('email') }}
						</span>
					@endif
				</div>
				<div class="form-group">
					<label for="imagen">Foto del instructor</label>
					<input type="file" class="form-control" name="imagen">
				</div>
				<div class="form-group{{ $errors->has('instructor_type_id') ? ' has-error' : '' }}">
					<label for="instructor_type_id" class="control-label">Tipo de contrato *</label>
					<select name="instructor_type_id" class="form-control text-capitalize">
						@foreach($instructor_type as $it)
						<option value="{{ $it->id }}" {{ $it->id == $dataInstructor->instructor_type_id ? 'selected="selected"' : '' }}>{{ $it->tipo_instructor }}</option>
						@endforeach
					</select>
					@if ($errors->has('instructor_type_id'))
						<span class="help-block">
							{{ $errors->first('instructor_type_id') }}
						</span>
					@endif
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
			Diligencie este formulario para editar el instructor.
		</p>
		<blockquote class="note note-info {{ count($errors) > 0 ? 'note-danger animated shake' : '' }}">
			Los campos que tienen asterisco <span class="btn">*</span> son obligatorios. <br>
			{{ count($errors) > 0 ? 'Por favor echa un vistazo a los errores y asegurate de llenar bien cada campo.' : '' }}
		</blockquote>
	</div>
@endsection
