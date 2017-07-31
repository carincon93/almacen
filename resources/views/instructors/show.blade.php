@extends('layouts.app')
@section('title', 'Ver instructor')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h1 class="text-uppercase">{{ $instructor->nombre.' '.$instructor->apellidos }}</h1>
				<hr>
				<ul class="breadcrumb">
					<li><a href="{{ url('instructor') }}">lista de instructores</a></li>
					<li>ver instructor</li>
				</ul>
				@if (session('status'))
				<div class="alert alert-success alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
					{!!  html_entity_decode(session('status')) !!}
				</div>
				@endif
				<div class="table-responsive">
					<table class="table table-stripped table-bordered table-hover">
						<tr>
							<th>id</th>
							<td>{{ $instructor->id }}</td>
						</tr>
						<tr>
							<th>Nombre</th>
							<td class="text-capitalize">{{ $instructor->nombre }}</td>

						</tr>
						<tr>
							<th>Apellidos</th>
							<td class="text-capitalize">{{ $instructor->apellidos }}</td>
						</tr>
						<tr>
							<th>Documento</th>
							<td>{{ $instructor->numero_documento }}</td>
						</tr>
						<tr>
							<th>Area</th>
							<td class="text-capitalize">{{ $instructor->area }}</td>
						</tr>
						<tr>
							<th>IP</th>
							<td>{{ $instructor->ip }}</td>
						</tr>
						<tr>
							<th>Teléfono</th>
							<td>{{ $instructor->telefono }}</td>
						</tr>
						<tr>
							<th>Celular</th>
							<td>{{ $instructor->celular }}</td>
						</tr>
						<tr>
							<th>Correo Electrónico</th>
							<td>{{ $instructor->email }}</td>
						</tr>
						<tr>
							<th>Tipo de contrato</th>
							<td class="text-capitalize">{{ $instructor->instructor_type->tipo_instructor}}</td>
						</tr>

					</table>

				</div>
			</div>
		</div>

	</div>
@endsection('content')
