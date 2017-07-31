@extends('layouts.app')
@section('title', 'lista de instructores')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>lista de instructores</h1>
			<hr>
			<ul class="breadcrumb">
				<li><a href="{{ url('instructor') }}">lista instructores</a></li>
				<li>ver instructor</li>
			</ul>
			@if (session('status'))
				<div class="alert alert-success alert-dismissible" role="alert">
				  	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
					  {!!  html_entity_decode(session('status')) !!}
				</div>
			@endif
			<table class="table table-stripped table-bordered table-hover">
				<tr>
					<th>id</th>
					<td>{{ $instructor->id }}</td>
				</tr>
				<tr>
					<th>nombre</th>
					<td>{{ $instructor->nombre }}</td>
					
				</tr>
				<tr>
					<th>apellidos</th>
					<td>{{ $instructor->apellidos }}</td>
				</tr>
				<tr>
					<th>documento</th>
					<td>{{ $instructor->numero_documento }}</td>
				</tr>
				<tr>
					<th>area</th>
					<td>{{ $instructor->area }}</td>
				</tr>
				<tr>
					<th>ip</th>
					<td>{{ $instructor->ip }}</td>
				</tr>
				<tr>
					<th>telefono</th>
					<td>{{ $instructor->telefono }}</td>
				</tr>
				<tr>
					<th>celular</th>
					<td>{{ $instructor->celular }}</td>
				</tr>
				<tr>
					<th>correo</th>
					<td>{{ $instructor->email }}</td>
				</tr>
				<tr>
					<th>tipo de contrato</th>
					<td>{{ $instructor->instructor_type->tipo_instructor}}</td>
				</tr>

			</table>
		</div>
	</div>
@endsection('content')
