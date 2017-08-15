@extends('layouts.app')

@section('title','Adicionar ficha')

@section('navbar-top')
<ul class="breadcrumb">
	<li><a href="{{ url('/admin/user') }}" class="btn-link">Lista de administradores</a></li>
	<li>Adicionar administrador</li>
</ul>
@endsection

@section('big-content-desc')
<h4>Adicionar administrador</h4>
@endsection

@section('content')
	<div class="col-md-8">
		<div class="card-form">
			<form action="{{ url('/admin/user') }}" method="POST">
				<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					{!! csrf_field()  !!}
					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						<label for="name" class="control-label">
							Nombre
						</label>
						<input type="text" name="name" class="form-control" value="{{ old('name') }}">
						@if ($errors->has('name'))
							<span class="help-block">
								{{ $errors->first('name') }}
							</span>
						@endif
					</div>
					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
						<label for="email" class="control-label">
							Correo
						</label>
						<input type="email" name="email" class="form-control" value="{{ old('email') }}">
						@if ($errors->has('email'))
							<span class="help-block">
								{{ $errors->first('email') }}
							</span>
						@endif
					</div>
					<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
						<label for="password" class="control-label">
							Contraseña
						</label>
						<input id="password" type="password" class="form-control" name="password">
						@if ($errors->has('password'))
							<span class="help-block">
								{{ $errors->first('password') }}
							</span>
						@endif
					</div>
					<div class="form-group">
						<label for="password-confirm" class="control-label">
							Confirmar Contraseña
						</label>
						<input id="password-confirm" type="password" class="form-control" name="password_confirmation">
					</div>
				</div>
				<div class="form-group">
					<button class="btn btn-success" type="submit">
						<i class="fa fa-fw fa-floppy-o"></i>
						Guardar
					</button>
				</div>
			</form>
		</div>
	</div>
	<div class="col-md-4">
		<h3><i class="fa fa-fw fa-plus"></i> Adicionar Ficha</h3>
		<p>
			Diligencie este formulario para agregar una nueva ficha.
		</p>
		<blockquote class="note note-info {{ count($errors) > 0 ? 'note-danger animated shake' : '' }}">
			Los campos que tienen asterisco <span class="btn">*</span> son obligatorios. <br>
			{{ count($errors) > 0 ? 'Por favor echa un vistazo a los errores y asegurate de llenar bien cada campo.' : '' }}
		</blockquote>
	</div>
@endsection