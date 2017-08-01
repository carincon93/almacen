@extends('layouts.app')
@section('content')
    <div class="container">
        <ul class="row list-unstyled">
            @foreach($dataClassroom as $clas)
            <li class="col-md-4">
                <div class="classroom" data-id="{{ $clas->id }}">
                    <header class="header-classroom">
                        <img src="{{ $clas->imagen }}" alt="" class="classroom-image">
                        <h3>{{ $clas->nombre_ambiente }}</h3>
                    </header>
                    <div class="body-classroom">

                    </div>
                </div>
            </li>
            @endforeach
        </ul>
        <!-- <ul class="row">
          @foreach($dataClassroom as $clas)
            <li class="col-md-4">
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
        </ul> -->
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
          Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>

    </div>
@endsection
