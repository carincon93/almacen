@extends('layouts.app')
@section('title','editar ambiente')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>adicionar instructor</h1>
			<hr>
			<ul class="breadcrumb">
				<li><a href="{{ url('instructor') }}">lista instructor</a></li>
				<li>adicionar instructor</li>
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
			

			<form action="{{ url('instructor/'.$in->id) }}" method="post">
				<div class="form-group">
					{!! csrf_field()  !!}
					{{ method_field('put') }}
					<div class="form-group">
						<input type="text" name="nombre" class="form-control" value="{{ $in->nombre }}">
						
					</div>
					<div class="form-group">
						<input type="text" name="apellidos" class="form-control" value="{{ $in->apellidos }}">
						
					</div>
					<div class="form-group">
						<input type="number" name="numero_documento" class="form-control" value="{{ $in->numero_documento }}">
						
					</div>
					<div class="form-group">
						<input type="text" name="area" class="form-control" value="{{ $in->area }}">
						
					</div>
					<div class="form-group">
						<input type="number" name="ip" class="form-control" value="{{ $in->ip }}">
						
					</div>
					<div class="form-group">
						<input type="number" name="telefono" class="form-control" value="{{ $in->telefono }}">
						
					</div>
					<div class="form-group">
						<input type="number" name="celular" class="form-control" value="{{ $in->celular }}">
						
					</div>
					<div class="form-group">
						<input type="email" name="email" class="form-control" value="{{ $in->email }}">
						
					</div>
					<div class="form-group">
						<select name="instructor_type_id">
							@foreach($instructor_type as $it)
								<option value="{{ $it->id }}" {{ $it->id==$in->instructor_type_id ? 'selected="selected"' : '' }}>{{ $it->tipo_instructor }}</option>
							@endforeach
						</select>
						
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
