@extends('layouts.app')
@section('title','adicionar ambiente')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>adicionar ambiente</h1>
			<hr>
			<ul class="breadcrumb">
				<li><a href="{{ url('classroom') }}">lista ambiente</a></li>
				<li>adicionar ambiente</li>
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
			

			<form action="{{ url('classroom') }}" method="post">
				<div class="form-group">
					{!! csrf_field()  !!}
					<div class="form-group">
						<input type="text" name="nombre_ambiente" class="form-control" placeholder="nombre de ambiente">
						
					</div>
					<div class="form-group">
						<label>tipo de ambiente</label>
						<select name="tipo_ambiente" class="form-control">
							<option value="aula">aula</option>
							<option value="taller">taller</option>
							<option value="auditorio">auditorio</option>
							<option value="campo deportivo">campo deportivo</option>
							<option value="laboratorio">laboratorio</option>
						</select>
						
					</div>
					<div class="form-group">
						<label>movilidad del ambiente</label>
						<select name="movilidad" class="form-control">
							<option value="fijo">fijo</option>
							<option value="movil">movil</option>
						</select>
						
					</div>
					<div class="form-group">
						<label>estado del ambiente</label>
						<select name="estado" class="form-control">
							<option value="activo">activo</option>
							<option value="inactivo">inactivo</option>
							<option value="en reparacion">en reparacion</option>
						</select>
						
					</div>
					<div class="form-group">
						<input type="text" name="cupo" class="form-control" placeholder="cupo">
						
					</div>
				</div>
				<div class="form-group">
					<button class="btn btn-success" type="submit"> Guardar
					</button>
				</div>

			</form>
		</div>
	</div>
@endsection
