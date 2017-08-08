@extends('layouts.app')

@section('title','Editar ambiente')

@section('form-search')
<ul class="breadcrumb">
	<li><a href="{{ url('/admin/instructor') }}" class="btn-link">Lista de ambientes</a></li>
	<li>Editar ambiente</li>
</ul>
@endsection

@section('content')
    @if (count($errors)>0)
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
        @foreach($errors->all() as $message)
        <li>{{ $message }}</li>
        @endforeach
    </div>
    @endif
	<div class="col-md-8">
		<div class="card-form">
			<form action="{{ url('/admin/classroom/'.$clr->id) }}" method="POST">
				<div class="form-group">
					{!! csrf_field()  !!}
					{{ method_field('put') }}
					<div class="form-group">
						<input type="text" name="nombre_ambiente" class="form-control" value="{{ $clr->nombre_ambiente }}">
					</div>
					<div class="form-group">
						<select name="tipo_ambiente" class="form-control">
							<option value="auditorio" {{ $clr->tipo_ambiente == 'auditorio' ? 'selected="selected"' : '' }}>Auditorio</option>
							<option value="aula" {{ $clr->tipo_ambiente == 'aula' ? 'selected="selected"' : '' }}>Aula</option>
							<option value="campo deportivo" {{ $clr->tipo_ambiente == 'campo deportivo' ? 'selected="selected"' : '' }}>Campo deportivo</option>
							<option value="laboratorio" {{ $clr->tipo_ambiente == 'laboratorio' ? 'selected="selected"' : '' }}>Laboratorio</option>
							<option value="taller" {{ $clr->tipo_ambiente == 'taller' ? 'selected="selected"' : ''  }}>Taller</option>
						</select>
					</div>
					<div class="form-group">
						<select name="movilidad" class="form-control">
							<option value="fijo" {{ $clr->movilidad == 'fijo' ? 'selected="selected"' : '' }}>Fijo</option>
							<option value="movil" {{ $clr->movilidad == 'movil' ? 'selected="selected"' : '' }}>Móvil</option>
						</select>
					</div>
					<div class="form-group">
						<select name="estado" class="form-control">
							<option value="activo" {{ $clr->estado == 'activo' ? 'selected="selected"' : '' }}>Activo</option>
							<option value="inactivo" {{ $clr->estado == 'inactivo' ? 'selected="selected"' : '' }}>Inactivo</option>
							<option value="en reparacion" {{ $clr->estado == 'en reparacion' ? 'selected="selected"' : '' }}>En reparación</option>
						</select>
					</div>
					<div class="form-group">
						<input type="text" name="cupo" class="form-control" value="{{ $clr->cupo }}">
					</div>
				</div>
				<div class="form-group">
					<button class="btn btn-success" type="submit">
						<i class="fa fa-fw fa-paper-plane"></i>
						Modificar
					</button>
				</div>
			</form>

		</div>
	</div>

	<div class="col-md-4">
		<h3><i class="fa fa-fw fa-pencil"></i> Editar Ambiente</h3>
		<p>
			Diligencia este formulario para editar el ambiente.
		</p>
		<blockquote class="note note-info">
			Los campos que tienen * (asterisco) son obligatorios.
		</blockquote>
	</div>


@endsection
