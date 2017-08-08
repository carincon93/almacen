@extends('layouts.app')

@section('title','Adicionar instructor')

@section('form-search')
<ul class="breadcrumb">
	<li><a href="{{ url('/admin/instructor') }}" class="btn-link">Lista de instructores</a></li>
	<li>Adicionar instructor</li>
</ul>
@endsection

@section('big-content-desc')
@endsection

@section('content')
	<!-- <ul class="breadcrumb">
		<li><a href="{{ url('/admin/instructor') }}">Lista de instructores</a></li>
		<li>Adicionar instructor</li>
	</ul> -->
	<div class="col-md-8">
		<div class="card-form">
			<form action="{{ url('admin/instructor') }}" method="POST">
				<div class="form-group">
					{!! csrf_field()  !!}
					<div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
						<label for="nombre" class="control-label">
							Nombre *
						</label>
						<input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}">
						@if ($errors->has('nombre'))
							<span class="help-block">
								{{ $errors->first('nombre') }}
							</span>
						@endif
					</div>
					<div class="form-group{{ $errors->has('apellidos') ? ' has-error' : '' }}">
						<label for="apellidos" class="control-label">
							Apellidos *
						</label>
						<input type="text" name="apellidos" class="form-control" value="{{ old('apellidos') }}">
						@if ($errors->has('apellidos'))
							<span class="help-block">
								{{ $errors->first('apellidos') }}
							</span>
						@endif

					</div>
					<div class="form-group{{ $errors->has('numero_documento') ? ' has-error' : '' }}">
						<label for="numero_documento" class="control-label">
							Número de documento *
						</label>
						<input type="number" name="numero_documento" class="form-control" value="{{ old('numero_documento') }}">
						@if ($errors->has('numero_documento'))
							<span class="help-block">
								{{ $errors->first('numero_documento') }}
							</span>
						@endif
					</div>
					<div class="form-group{{ $errors->has('area') ? ' has-error' : '' }}">
						<label for="area" class="control-label">
							Área/Especialidad *
						</label>
						<input type="text" name="area" class="form-control" value="{{ old('area') }}">
						@if ($errors->has('area'))
							<span class="help-block">
								{{ $errors->first('area') }}
							</span>
						@endif
					</div>
					<div class="form-group{{ $errors->has('ip') ? ' has-error' : '' }}">
						<label for="ip" class="control-label">
							IP *
						</label>
						<input type="number" name="ip" class="form-control" value="{{ old('ip') }}">
						@if ($errors->has('ip'))
							<span class="help-block">
								{{ $errors->first('ip') }}
							</span>
						@endif
					</div>
					<div class="form-group">
						<label for="telefono" class="control-label">Télefono</label>
						<input type="number" name="telefono" class="form-control" value="{{ old('telefono') }}">
					</div>
					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
						<label for="celular" class="control-label">No. Celular</label>
						<input type="number" name="celular" class="form-control" value="{{ old('celular') }}">
						@if ($errors->has('celular'))
							<span class="help-block">
								{{ $errors->first('celular') }}
							</span>
						@endif
					</div>
					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
						<label for="email" class="control-label">Correo Electrónico *</label>
						<input type="email" name="email" class="form-control" value="{{ old('email') }}">
						@if ($errors->has('email'))
							<span class="help-block">
								{{ $errors->first('email') }}
							</span>
						@endif
					</div>
					<div class="form-group{{ $errors->has('instructor_type_id') ? ' has-error' : '' }}">
						<label for="instructor_type_id" class="control-label">Tipo de contrato *</label>
						<select name="instructor_type_id" class="form-control">
							<option value="">Seleccione el tipo de contrato...</option>
							@foreach($instructor_type as $it)
							<option value="{{ $it->id }}" class="text-capitalize" {{ (old("instructor_type_id") == $it->id ? "selected" : "")}}>{{ $it->tipo_instructor }}</option>
							@endforeach
						</select>
						@if ($errors->has('instructor_type_id'))
							<span class="help-block">
								{{ $errors->first('instructor_type_id') }}
							</span>
						@endif
					</div>
				</div>
				<button class="btn btn-success" type="submit">
					<i class="fa fa-fw fa-floppy-o"></i>
					Guardar
				</button>
			</form>

		</div>

	</div>
	<div class="col-md-4">
		<h3><i class="fa fa-fw fa-user-plus"></i> Adicionar Instructor</h3>
		<p>
			Diligencia este formulario para agregar un nuevo instructor.
		</p>
		<blockquote class="note note-info">
			Los campos que tienen * (asterisco) son obligatorios.
		</blockquote>
	</div>
@endsection
