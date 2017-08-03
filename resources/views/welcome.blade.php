@extends('layouts.app')
@section('content')
    <div class="app-welcome row">
        <div class="col-md-8">
            <div class="box-wrapper">
                <div class="box box1" data-target="classrooms">
                    <header></header>
                    <div class="box-body">
                        <h4>Prestar ambiente</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio molestiae incidunt cum eius
                            voluptatem architecto consequuntur ea soluta ut velit. Harum, tenetur recusandae nam voluptatibus.
                        </p>
                    </div>
                </div>
                <div id="classrooms">
                    <table class="table-classrooms">
                        <tbody>
                            @foreach($dataClassroom as $clas)
                            <tr>
                                <td>
                                    @if($clas->estado == 'reparacion')
                                    <a href="#" class="cr cr-repair classroom"><i class="fa fa-fw fa-exclamation-triangle"></i> {{ $clas->nombre_ambiente }} <span>(En reparación)</span></a>
                                    @elseif($clas->estado == 'inactivo')
                                    <a href="#" class="cr cr-inactive classroom"><i class="fa fa-fw fa-ban"></i> {{ $clas->nombre_ambiente }} <span>(Inactivo)</span></a>
                                    @elseif($clas->disponibilidad == 'no disponible')
                                    <a href="{{ url('classroom_loan/'.$clas->id) }}" class="classroom"><i class="fa fa-fw fa-circle"></i>{{ $clas->nombre_ambiente }} <span class="cr-instructor">{{ $clas->instructor->nombre.' '.$clas->instructor->apellidos }}</span></a>
                                    @else
                                    <a href="{{ url('classroom_loan/'.$clas->id) }}" class="classroom">{{ $clas->nombre_ambiente }}</a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

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
        <div class="col-md-4">
            <div class="box box2">
                <header></header>
                <div class="box-body">
                    <h5>Total prestamos de ambientes <span class="historial-count">{{ $countHistorial }}</span></h5>
                </div>
            </div>
        </div>

        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Prestar ambiente</h4>
                    </div>
                    <div class="modal-body">

                        <ul class="list-unstyled row">
                            @foreach($dataClassroom as $clas)
                            <li class="col-md-4">
                                @if($clas->estado == 'reparacion')
                                <a href="#" class="cr cr-repair classroom"><i class="fa fa-fw fa-exclamation-triangle"></i> {{ $clas->nombre_ambiente }}</a>
                                @elseif($clas->estado == 'inactivo')
                                <a href="#" class="cr cr-inactive classroom"><i class="fa fa-fw fa-ban"></i> {{ $clas->nombre_ambiente }}</a>
                                @elseif($clas->disponibilidad == 'no disponible')
                                <a href="{{ url('classroom_loan/'.$clas->id) }}" class="classroom"><span class="fa fa-fw fa-circle"></span>{{ $clas->nombre_ambiente }}</a>
                                @else
                                <a href="{{ url('classroom_loan/'.$clas->id) }}" class="classroom">{{ $clas->nombre_ambiente }}</a>
                                @endif
                            </li>
                            @endforeach
                        </ul>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
