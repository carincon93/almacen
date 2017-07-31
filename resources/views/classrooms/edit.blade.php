@extends('layouts.app')
@if(Auth::check())
@section('title', 'Modificar Ambiente')
@else
@section('title', 'Prestar Ambiente')
@endif
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">Inicio</a></li>
                    <li class="active">Modificar Ambiente</li>
                </ul>
                <h1>{{ $dataClassroom->nombre_ambiente }}</h1>
                <hr>
                <form action="{{ url('classroom/loan') }}" method="POST">
                    {!! csrf_field() !!}
                    <input type="hidden" name="classroom_id" value="{{ $dataClassroom->id }}">
                    <div class="form-group">
                        <select name="instructor_id" id="" class="text-capitalize">
                            <option value="">Seleccione un instructor</option>
                            @foreach($dataInstructor as $ins)
                            <option value="{{ $ins->id }}" >{{ $ins->nombre.' '.$ins->apellidos }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit">Guardar</button>
                </form>
                <form action="{{ url('classroom/'.$dataClassroom->id) }}" method="POST">
                    {{ method_field('PUT') }}
                    {!! csrf_field() !!}
                    @if(Auth::check())
                    <div class="form-group">
                        <input type="text" name="nombre_ambiente" class="form-control" placeholder="Nombre" value="{{ $dataClassroom->nombre_ambiente }}">
                    </div>
                    @endif
                    @if($dataClassroom->disponibilidad != 'no disponible')
                    <div class="checkbox form-group">
                      <label>
                          <input type="checkbox" name="disponibilidad" value="no disponible"> ¿Prestar ambiente?
                      </label>
                    </div>
                    @else
                    <div class="checkbox form-group">
                      <label>
                          <input type="checkbox" name="disponibilidad" value="disponible"> ¿Desea cambiar la disponibilidad del ambiente a: Disponible?
                      </label>
                    </div>
                    @endif
                    <button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-send"></i> Modificar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
