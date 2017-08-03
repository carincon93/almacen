@extends('layouts.app')
@section('title', 'Prestar Ambiente')
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            @if (count($errors)>0)

            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                @foreach($errors->all() as $message)
                <li>{{ $message }}</li>
                @endforeach
            </div>

            @endif
            <ul class="breadcrumb">
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li class="active">Prestar Ambiente</li>
            </ul>
            <h1 class="text-capitalize">{{ $dataClassroom->nombre_ambiente }}</h1>
            @if($dataClassroom->instructor_id != '')
            <h3 class="text-capitalize">{{ $dataClassroom->instructor->nombre.' '.$dataClassroom->instructor->apellidos }}</h3>
            @endif
            <hr>
            <form action="{{ url('classroom_loan/'.$dataClassroom->id.'/loan') }}" method="POST">
                {!! csrf_field() !!}
                <input type="hidden" name="id" value="{{ $dataClassroom->id }}" id="id">
                <!-- Ambiente disponible -->
                <input type="hidden" value="{{ date('Y-m-d H:i:s') }}" name="borrowed_at">
                @if($dataClassroom->disponibilidad != 'no disponible')
                <div class="form-group">
                    <select name="instructor_id" class="text-capitalize form-control">
                        <option value="">Seleccione un instructor</option>
                        @foreach($dataInstructor as $ins)
                        <option value="{{ $ins->id }}" >{{ $ins->nombre.' '.$ins->apellidos }}</option>
                        @endforeach
                    </select>
                </div>
                {{-- <div class="checkbox form-group">
                  <label>
                      <input type="checkbox" name="disponibilidad" value="no disponible"> ¿Prestar ambiente?
                  </label>
                </div> --}}
                <button class="btn btn-success save_entrie" type="submit">prestar ambiente</button>
                <!-- Ambiente NO disponible -->
                @else
                <div class="form-group hidden">
                    <select name="instructor_id" class="text-capitalize" class="form-control">
                        <option value=""></option>
                    </select>
                </div>
                <div class="checkbox form-group">
                  <label>
                      <input type="checkbox" name="disponibilidad" value="disponible"> ¿Desea cambiar la disponibilidad del ambiente a: Disponible?
                  </label>
                </div>
                <div class="form-group">
                    <textarea name="novedad" rows="8" cols="80" class="form-control"></textarea>
                </div>
                <input type="hidden" name="borrowed_at" value="{{ $dataClassroom->borrowed_at }}" class="borrowed">
                <input type="hidden" name="delivered_at" value="{{ date('Y-m-d H:i:s') }}">
                <button class="btn btn-success modify_entrie" type="submit">Modificar</button>
                @endif
            </form>
        </div>
    </div>
@endsection
