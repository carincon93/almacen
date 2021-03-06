@extends('layouts.app')

@section('title','Editar administrador')

@section('big-content-desc')
<ul class="breadcrumb">
	<li><a href="{{ url('/admin/collaborator') }}" class="btn-link">Lista de administradores</a></li>
	<li>Editar administrador</li>
</ul>
@endsection

@section('big-content-desc')
<h4>Editar administrador</h4>
@endsection

@section('content')
	<div class="col-md-8">
		<div class="card-form">
			<form action="{{ url('/admin/collaborator/'.$dataCollaborator->id) }}" method="POST">
				<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					@csrf
					{{ method_field('PUT') }}
					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						<label for="name" class="control-label">
							Nombre
						</label>
						<input type="text" name="name" class="form-control" value="{{ $dataCollaborator->name }}">
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
						<input type="email" name="email" class="form-control" value="{{ $dataCollaborator->email }}">
						@if ($errors->has('email'))
							<span class="help-block">
								{{ $errors->first('email') }}
							</span>
						@endif
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
		<h3><i class="fa fa-fw fa-plus"></i> Editar Administrador</h3>
		<p>
			Diligencie este formulario para agregar un nuevo administrador.
		</p>
		<blockquote class="note note-info {{ count($errors) > 0 ? 'note-danger animated shake' : '' }}">
			Los campos que tienen asterisco <span class="btn">*</span> son obligatorios. <br>
			{{ count($errors) > 0 ? 'Por favor echa un vistazo a los errores y asegurate de llenar bien cada campo.' : '' }}
		</blockquote>
	</div>
@endsection
