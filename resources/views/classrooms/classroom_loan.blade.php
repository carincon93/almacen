@extends('layouts.app')
@section('title', 'Prestar Ambiente')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
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
                        <select name="instructor_id" id="" class="text-capitalize">
                            <option value="">Seleccione un instructor</option>
                            @foreach($dataInstructor as $ins)
                            <option value="{{ $ins->id }}" >{{ $ins->nombre.' '.$ins->apellidos }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="checkbox form-group">
                      <label>
                          <input type="checkbox" name="disponibilidad" value="no disponible"> ¿Prestar ambiente?
                      </label>
                    </div>
                    <button class="btn btn-success save_entrie" type="submit">Modificar</button>
                    <!-- Ambiente NO disponible -->
                    @else
                    <input type="hidden" name="borrowed_at" value="{{ $dataClassroom->borrowed_at }}" class="borrowed">
                    <input type="hidden" name="delivered_at" value="{{ date('Y-m-d H:i:s') }}">
                    <div class="form-group hidden">
                        <select name="instructor_id" id="" class="text-capitalize">
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="checkbox form-group">
                      <label>
                          <input type="checkbox" name="disponibilidad" value="disponible"> ¿Desea cambiar la disponibilidad del ambiente a: Disponible?
                      </label>
                    </div>
                    <button class="btn btn-success modify_entrie" type="submit">Modificar</button>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection
