@extends('layouts.app')
@section('content')
    <div class="hidden">
        <p>lorem</p>
        <ul>
            <li>asdas</li>
            <li>asdas</li>
            <li>asdas</li>
            <li>asdas</li>
            <li>asdas</li>
        </ul>
    </div>
    <div class="container app-welcome">
        <div class="row">
            <div class="col-md-6">
                <div class="box box1" data-toggle="modal" data-target="#myModal">
                    <header></header>
                    <div class="box-body">
                        <h4><strong>Prestar ambiente</strong></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio molestiae incidunt cum eius
                            voluptatem architecto consequuntur ea soluta ut velit. Harum, tenetur recusandae nam voluptatibus.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box box2">
                    <header></header>
                    <div class="box-body">
                        <h4><strong>Historial de prestamos</strong></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio molestiae incidunt cum eius
                            voluptatem architecto consequuntur ea soluta ut velit. Harum, tenetur recusandae nam voluptatibus.
                        </p>
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
