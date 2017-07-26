@extends('layout-app.base')
@section('title', 'lista de ambientes')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>lista de ambientes</h1>
			<hr>
			<ul class="breadcrumb">
				<li><a href="{{ url('ambiente') }}">lista ambientes</a></li>
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
					<td>{{ $ambiente->id }}</td>
				</tr>
				<tr>
					<th>nombre de ambiente</th>
					<td>{{ $ambiente->nombre_ambiente }}</td>
					
				</tr>
				<tr>
					<th>tipo de ambiente</th>
					<td>{{ $ambiente->tipo_ambiente }}</td>
				</tr>
				<tr>
					<th>movilidad</th>
					<td>{{ $ambiente->movilidad }}</td>
				</tr>
				<tr>
					<th>cupo</th>
					<td>{{ $ambiente->cupo }}</td>
				</tr>
{{-- 				<tr>
					
					<th>instructor</th>
					<td>{{ $ambiente->instructor->nombre }}</td>
				</tr> --}}

			</table>
		</div>
	</div>
@endsection('content')
