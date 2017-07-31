@extends('layouts.app')
@section('title', 'lista de ambientes')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>lista de ambientes</h1>
			<hr>
			<ul class="breadcrumb">
				<li><a href="{{ url('classroom') }}">lista ambientes</a></li>
				<li>ver ambiente</li>
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
					<td>{{ $classroom->id }}</td>
				</tr>
				<tr>
					<th>nombre de ambiente</th>
					<td>{{ $classroom->nombre_ambiente }}</td>
					
				</tr>
				<tr>
					<th>tipo de ambiente</th>
					<td>{{ $classroom->tipo_ambiente }}</td>
				</tr>
				<tr>
					<th>movilidad</th>
					<td>{{ $classroom->movilidad }}</td>
				</tr>
				<tr>
					<th>cupo</th>
					<td>{{ $classroom->cupo }}</td>
				</tr>
				<tr>
					<th>disponibilidad</th>
					<td>{{ $classroom->disponibilidad }}</td>
				</tr>
{{-- 				<tr>
					
					<th>instructor</th>
					<td>{{ $ambiente->instructor->nombre }}</td>
				</tr> --}}

			</table>
		</div>
	</div>
@endsection('content')
