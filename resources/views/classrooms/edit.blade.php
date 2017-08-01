@extends('layouts.app')
@section('title','Editar ambiente')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1>Editar ambiente</h1>
                <hr>
                <ul class="breadcrumb">
                    <li><a href="{{ url('classroom') }}">lista de ambientes</a></li>
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


                <form action="{{ url('classroom/'.$clr->id) }}" method="POST" enctype="multipart/form-data">
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
                                <option value="reparacion" {{ $clr->estado == 'reparacion' ? 'selected="selected"' : '' }}>En reparación</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="cupo" class="form-control" value="{{ $clr->cupo }}">
                        </div>
                        <div class="form-group">
							<input type="file" name="imagen" class="form-control">
						</div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">
                            <i class="fa fa-fw fa-paper-plane"></i>
                            Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
