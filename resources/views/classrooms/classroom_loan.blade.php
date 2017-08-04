@extends('layouts.app')
@section('title', 'Prestar Ambiente')
@section('page-desc')
<ul class="breadcrumb">
    <li><a href="{{ url('/') }}">Inicio</a></li>
    <li class="active">Prestar Ambiente</li>
</ul>
@endsection
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
                <button class="btn btn-success save_entrie" type="submit">prestar ambiente</button>
                @endif
            </form>
        </div>
    </div>
@endsection
