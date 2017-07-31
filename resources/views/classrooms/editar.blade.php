@extends('layouts.app')
@section('title','editar ambiente')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>editar ambiente</h1>
			<hr>
			<ul class="breadcrumb">
				<li><a href="{{ url('classroom') }}">lista ambiente</a></li>
				<li>editar ambiente</li>
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
			

			<form action="{{ url('classroom/'.$clr->id) }}" method="post">
				<div class="form-group">
					{!! csrf_field()  !!}
					{{ method_field('put') }}
					<div class="form-group">
						<input type="text" name="nombre_ambiente" class="form-control" value="{{ $clr->nombre_ambiente }}">
						
					</div>
					{{-- <div class="form-group">
						<select name="tipo_ambiente" >
							@foreach ($clr as $clr)
								<option value="{{ $clr->id }}" {{ $clr==$clr->tipo_ambiente ? 'selected="selected"' : '' }}>
									{{ $clr->tipo_ambiente }}
								</option>
							@endforeach
						</select>
					</div> --}}
					<div class="form-group">
						<input type="text" name="movilidad" class="form-control" value="{{ $clr->movilidad }}">
						
					</div>
					<div class="form-group">
						<input type="text" name="estado" class="form-control" value="{{ $clr->estado }}">
						
					</div>
					<div class="form-group">
						<input type="text" name="cupo" class="form-control" value="{{ $clr->cupo }}">
						
					</div>
				</div>
				<div class="form-group">
					<button class="btn btn-success" type="submit">
						<i class="glyphicon glyphicon-send"></i> Guardar
					</button>
				</div>

			</form>
		</div>
	</div>
@endsection
