@extends('layout-app.base')
@section('title','adicionar ambiente')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>adicionar ambiente</h1>
			<hr>
			<ul class="breadcrumb">
				<li><a href="{{ url('ambiente') }}">lista ambiente</a></li>
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
			

			<form action="{{ url('ambiente') }}" method="post">
				<div class="form-group">
					{!! csrf_field()  !!}
					<input type="text" name="nombre_ambiente" class="form-control" placeholder="nombre de ambiente">
					<br><br>
					<input type="text" name="tipo_ambiente" class="form-control" placeholder="tipo de ambiente">
					<br><br>
					<input type="text" name="movilidad" class="form-control" placeholder="movilidad">
					<br><br>
					<input type="text" name="estado" class="form-control" placeholder="estado">
					<br><br>
					<input type="text" name="cupo" class="form-control" placeholder="cupo">
					<br><br>
					<select name="id_instructor" class="form-control">
						@foreach ($instructores as $inst)
							<option value="{{ $inst->id }}">
								{{ $inst->nombre }}
							</option>
						@endforeach
					</select>
					<br><br>
				</div>
				<div class="form-group">
					<button class="btn btn-success" type="submit"> Guardar
					</button>
				</div>

			</form>
		</div>
	</div>
@endsection
