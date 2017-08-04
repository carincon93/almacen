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
            <form action="{{ url('classroom_loan2/'.$dataClassroom->id.'/loan') }}" method="POST">
                {!! csrf_field() !!}
                <input type="hidden" name="id" value="{{ $dataClassroom->id }}" id="id">
                <div class="form-group">
                    <label>Agregar novedad</label>
                    <textarea name="novedad" rows="8" cols="80" class="form-control"></textarea>
                </div>
                <input type="hidden" name="borrowed_at" value="{{ $dataClassroom->borrowed_at }}" class="borrowed">
                <input type="hidden" name="delivered_at" value="{{ date('Y-m-d H:i:s') }}">
                <button class="btn btn-success modify_entrie" type="submit">Modificar</button>
            </form>
        </div>
    </div>
@endsection
