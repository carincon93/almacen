@extends('layouts.app')

@section('navbar-top')
<h4><i class="fa fa-fw fa-key"></i>Prestar ambiente</h4>
@endsection
@section('content')
    <!-- Modal -->
    <div class="modal fade" id="solicitar_prestamo">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-capitalize" id="myModalLabel"></h4>
                </div>
                <div class="modal-body modal-prestar">

                    <!-- Input de búsqueda -->
                    <blockquote class="note note-info">
                        <p class="h4">Por favor introduzca el número de documento del instructor.</p>
                        <i class="fa fa-fw fa-barcode"></i>
                        <input type="search" id="numero_documento" class="form-control" placeholder="Documento Instructor" autocomplete="off" autofocus>
                    </blockquote>
                    <br>
                    <!-- Formulario para préstamo -->
                    <form action="" method="POST" id="form-solicitud">
                        {!! csrf_field() !!}
                        <input name="id" type="hidden" value="" id="id_clr">
                        <input name="prestado_en" type="hidden" value="{{ date('Y-m-d H:i:s') }}">

                        <div id="asd"></div>

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary save_historical" id="submit-solicitud">Prestar Ambiente</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="entregar_ambiente">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-capitalize" id="myModalLabel"></h4>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" id="form-entrega">
                        {!! csrf_field() !!}
                        <input name="prestado_en" type="hidden" value="" id="prestado_en">

                        <input name="id" type="hidden" value="" id="id-clrEntrega">
                        <input name="entregado_en" type="hidden" value="{{ date('Y-m-d H:i:s') }}">
                        <input value="" name="instructor_id" class="hidden">
                        <div class="form-group">
                            <label class="label-control">Agregar novedad</label>
                            <textarea name="novedad" rows="8" cols="80" class="form-control"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary modify_historical" id="submit-entrega">Entregar Ambiente</button>
                </div>
            </div>
        </div>
    </div>
    <div class="search-navbar-wrapper">
        <i class="fa fa-fw fa-search"></i>
        <input type="search" id="wnombre_ambiente" class="form-control search-navbar" placeholder="Buscar ambiente" autocomplete="off" autofocus>
    </div>
    <div id="classroom-section">
        @foreach($dataClassroom->chunk(3) as $chunk)
        <div class="row">
            @foreach($chunk as $clr)
            <div class="col-md-4">
                @if($clr->estado == 'inactivo')
                <div>
                    <div class="classroom-card card clr-inactive">
                        <div class="clr-img">
                            <img src="{{ asset($clr->imagen) }}" alt="" class="img-classroom img-clrinactive img-responsive">
                        </div>
                        <div class="clr-desc">
                            <h5 class="" data-nombreClr="{{ $clr->nombre_ambiente }}">{{ $clr->nombre_ambiente }}</h5>
                            <hr>
                            <p>El ambiente está inactivo.</p>
                        </div>
                    </div>
                </div>
                @elseif($clr->estado == 'en reparacion')
                <div>
                    <div class="classroom-card card clr-repair">
                        <div class="clr-img">
                            <img src="{{ asset($clr->imagen) }}" alt="" class="img-classroom img-clrinactive img-responsive">
                        </div>
                        <div class="clr-desc">
                            <h5 class="">{{ $clr->nombre_ambiente }}</h5>
                            <hr class="hr-repair">
                            <p>El ambiente se encuentra en reparación</p>
                        </div>
                    </div>
                </div>
                @elseif($clr->disponibilidad == 'no disponible')
                <div>
                    <div class="classroom-card card clr-entregar" data-idclr="{{ $clr->id }}" data-entregar="{{ $clr->prestado_en }}" data-idIns="{{ $clr->instructor->id }}">
                        <div class="clr-img">
                            <img src="{{ asset($clr->imagen) }}" alt="" class="img-classroom img-clrinactive img-responsive">
                            <div class="info-clr">Ambiente en uso <span class="pull-right">{{ $clr->prestado_en }}</span></div>
                        </div>
                        <div class="clr-desc">
                            <h5 class="" data-nombreClr="{{ $clr->nombre_ambiente }}">{{ $clr->nombre_ambiente }}</h5>
                            <hr>
                            <div class="text-capitalize">{{ $clr->instructor->nombre.' '.$clr->instructor->apellidos }}</div>
                            <span class="badge fecha-prestamo"></span>
                        </div>
                    </div>
                </div>
                @else
                <div>
                    <div class="classroom-card card clr-disponible" data-idclr="{{ $clr->id }}">
                        <div class="clr-img">
                            <img src="{{ asset($clr->imagen) }}" alt="" class="img-classroom img-responsive">
                        </div>
                        <div class="clr-desc">
                            <h5 class="" data-nombreClr="{{ $clr->nombre_ambiente }}">{{ $clr->nombre_ambiente }}</h5>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
@endsection

@section('right-content')
    @if(Auth::guest())
    <h4>Últimos prestamos</h4>
    <div class="card">
        <div class="table-responsive">
            <table class="table table-small">
                <thead>
                    <tr>
                        <th>Instructor</th>
                        <th>Ambiente</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataHistorical as $his)
                    <tr class="text-capitalize">
                        <td>{{ $his->instructor->nombre }}</td>
                        <td>{{ $his->classroom->nombre_ambiente }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif

@endsection
