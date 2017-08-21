@extends('layouts.app')

@section('title', 'Ver instructor')

@section('navbar-top')
<ul class="breadcrumb">
	<li><a href="{{ url('/admin/instructor') }}" class="btn-link">Lista de instructores</a></li>
	<li>Ver instructor</li>
</ul>
@endsection

@section('content')
	<h1 class="text-uppercase">{{ $dataInstructor->nombre.' '.$dataInstructor->apellidos }}</h1>
	<hr>
	@if (session('status'))
	<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
		{!!  html_entity_decode(session('status')) !!}
	</div>
	@endif
	<div class="table-responsive">
		<table class="table table-stripped table-bordered table-hover">
			<tr>
				<th>ID</th>
				<td>{{ $dataInstructor->id }}</td>
			</tr>
			<tr>
				<th>Nombre</th>
				<td class="text-capitalize">{{ $dataInstructor->nombre }}</td>

			</tr>
			<tr>
				<th>Apellidos</th>
				<td class="text-capitalize">{{ $dataInstructor->apellidos }}</td>
			</tr>
			<tr>
				<th>Tipo de contrato</th>
				<td class="text-capitalize">{{ $dataInstructor->vinculacion1 }}</td>
			</tr>
			
			<tr>
				<th>Area</th>
				<td class="text-capitalize">{{ $dataInstructor->area }}</td>
			</tr>
			<tr>
				<th>Documento</th>
				<td>{{ $dataInstructor->numero_documento }}</td>
			</tr>
			<tr>
				<th>IP</th>
				<td>{{ $dataInstructor->ip }}</td>
			</tr>
			<tr>
				<th>Celular</th>
				<td>{{ $dataInstructor->celular }}</td>
			</tr>
			<tr>
				<th>Correo Electrónico</th>
				<td>{{ $dataInstructor->email }}</td>
			</tr>
			
		</table>

	</div>
@endsection
