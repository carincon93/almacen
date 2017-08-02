@extends('layouts.app')
@section('title','Adicionar ambiente')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h1>Adicionar ambiente</h1>
				<hr>
				<ul class="breadcrumb">
					<li><a href="{{ url('classroom') }}">Lista de ambientes</a></li>
					<li>Adicionar ambiente</li>
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


				<form action="{{ url('classroom') }}" method="POST">
					<div class="form-group">
						{!! csrf_field()  !!}
						<div class="form-group">
							<input type="text" name="nombre_ambiente" class="form-control" placeholder="Nombre del ambiente">
						</div>
						<div class="form-group">
							<select name="tipo_ambiente" class="form-control">
								<option value="">Seleccione el tipo de ambiente..</option>
								<option value="aula">Aula</option>
								<option value="taller">Taller</option>
								<option value="auditorio">Auditorio</option>
								<option value="campo deportivo">Campo deportivo</option>
								<option value="laboratorio">Laboratorio</option>
							</select>
						</div>
						<div class="form-group">
							<select name="movilidad" class="form-control">
								<option value="">Seleccione el tipo de movilidad del ambiente..</option>
								<option value="fijo">Fijo</option>
								<option value="movil">Móvil</option>
							</select>
						</div>
						<div class="form-group">
							<select name="estado" class="form-control">
								<option value="">Seleccione el estado en que se encuentra el ambiente..</option>
								<option value="activo">Activo</option>
								<option value="inactivo">Inactivo</option>
								<option value="en reparacion">En reparación</option>
							</select>
						</div>
						<div class="form-group">
							<input type="text" name="cupo" class="form-control" placeholder="Cupo del ambiente">
						</div>
					</div>
					<div class="form-group">
						<button class="btn btn-success" type="submit">
							<i class="fa fa-fw fa-paper-plane"></i>
							Guardar
						</button>
					</div>

				</form>
			</div>
		</div>

	</div>
@endsection
