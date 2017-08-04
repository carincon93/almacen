@extends('layouts.app')
@section('page-header')
    <div class="page-header-content">
        <div class="form-wrapper">
            <form action="" method="POST" class="search-ajax">
                {!! csrf_field() !!}
                <div class="form-group search">
                    <i class="fa fa-fw fa-search"></i>
                    <input type="search" class="form-control" name="nombre_ambiente" placeholder="Buscar ambiente">
                </div>
            </form>
        </div>
    </div>
@endsection
@section('page-desc')
    <div>
        <h4>Prestar ambiente</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, facere!</p>
    </div>
@endsection
@section('content')
    <div class="app-welcome row">
        <div class="col-md-12">
            @if (session('status'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                {!!  html_entity_decode(session('status')) !!}
            </div>
            @endif
            <div class="box-wrapper">
                <div id="classrooms">
                    <div class="row content-ajax">
                        @foreach($dataClassroom as $clas)
                        <div class="col-md-6">
                            <div class="panel">
                                <div class="panel-body">
                                    @if($clas->estado == 'reparacion')
                                    <a href="#" class="cr cr-repair classroom"><i class="fa fa-fw fa-exclamation-triangle"></i> {{ $clas->nombre_ambiente }} <span>(En reparación)</span></a>
                                    @elseif($clas->estado == 'inactivo')
                                    <a href="#" class="cr cr-inactive classroom"><i class="fa fa-fw fa-ban"></i> {{ $clas->nombre_ambiente }} <span>(Inactivo)</span></a>
                                    @elseif($clas->disponibilidad == 'no disponible')
                                    <a href="{{ url('classroom_loan2/'.$clas->id) }}" class="classroom"><i class="fa fa-fw fa-circle"></i>{{ $clas->nombre_ambiente }} <span class="cr-instructor">{{ $clas->instructor->nombre.' '.$clas->instructor->apellidos }}</span></a>
                                    @else
                                    <a href="{{ url('classroom_loan/'.$clas->id) }}" class="classroom">{{ $clas->nombre_ambiente }}</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="box-table">
                <h4>Historial de prestamos</h4>
                <div class="padding-box">
                    <table class="table table-striped table-bordered dataTable no-footer">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Nombre ambiente</th>
                                <th>Fecha prestamo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dataHistorial as $dh)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td class="text-capitalize">{{ $dh->instructor->nombre.' '.$dh->instructor->apellidos }}</td>
                                <td class="text-capitalize">{{ $dh->classroom->nombre_ambiente }}</td>
                                <td>{{ $dh->borrowed_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $dataHistorial->links() }}
                </div>
            </div>
        </div>
        <!-- <div class="col-md-4">
            <div class="box box2">
                <header></header>
                <div class="box-body">
                    <h5>Total prestamos de ambientes <span class="historial-count">{{ $countHistorial }}</span></h5>
                </div>
            </div>
        </div> -->
    </div>
@endsection
