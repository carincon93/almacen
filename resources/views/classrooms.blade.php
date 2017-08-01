@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="modal-body">
            <ul class="row">
              @foreach($dataClassroom as $clas)
                <li class="col-md-6">
                    @if($clas->estado == 'reparacion')
                    <a href="#" class="classroom cr cr-repair">
                        <div class="classroom-content">
                            <h3>{{ $clas->nombre_ambiente }}</h3>
                        </div>
                    </a>
                    @elseif($clas->estado == 'inactivo')
                    <a href="#" class="classroom cr cr-inactive">
                        <div class="classroom-content">
                            <h3>{{ $clas->nombre_ambiente }}</h3>
                        </div>
                    </a>
                    @else
                    <a href="{{ url('classroom_loan/'.$clas->id) }}" class="classroom">
                        <div class="classroom-content">
                            <h3>{{ $clas->nombre_ambiente }}</h3>
                            <span>{{ $clas->instructor['nombre'].' '.$clas->instructor['apellidos'] }}</span>
                        </div>
                    </a>
                    @endif
                </li>
              @endforeach
            </ul>
        </div>
    </div>
@endsection
