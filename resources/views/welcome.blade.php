@extends('layouts.app')


@section('content')
    @section('title', 'Suplemento alimenticio')

    @section('big-content-desc')

        @if ($errors->has('token_error'))
        <!-- Modal -->
        <div class="modal fade" id="modalSession" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Sesión expirada</h4>
                    </div>
                    <div class="modal-body">
                        {{ $errors->first('token_error') }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">
                            <a href="{{ url('/') }}">Volver a la página principal</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @endif
    <!-- Modal -->
    <div class="modal fade" id="modal_solicitar_prestamo">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-capitalize"></h4>
                </div>
                <div class="modal-body modal-prestar">
                    <!-- Input de búsqueda de instructor -->
                    <div class="">
                        <p class="h4">Por favor introduzca el número de documento del instructor.</p>
                        <i class="fa fa-fw fa-barcode"></i>
                        <input type="search" id="buscar_instructor" class="form-control" placeholder="Documento Instructor" autocomplete="off" autofocus>
                    </div>
                    <!-- Formulario para préstamo -->
                    <form action="" method="POST" id="form-prestamo">
                        {!! csrf_field() !!}

                        <input name="id" type="hidden" value="" id="id_ambiente">
                        <input name="prestado_en" type="hidden" value="">
                        <div id="resultado_instructor"></div>
                        <select name="class_group_id" class="select">
                            <option value="">Seleccione una ficha...</option>
                            @foreach($dataFicha as $ficha)
                            <option value="{{ $ficha->id }}">{{ $ficha->id_ficha.' '.$ficha->nombre_ficha }}</option>
                            @endforeach
                        </select>
                        <span id="mensaje" class="help-block" style="color:#a94442"></span>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="btn-prestar-ambiente">Prestar Ambiente</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal_entregar_ambiente">
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
                        <input value="" name="instructor_id" class="hidden">
                        <input value="" name="class_group_id" class="hidden">
                        <div class="form-group">
                            <label class="label-control">Agregar novedad</label>
                            <textarea name="novedad" rows="4" cols="80" class="form-control" autofocus></textarea>
                            {{-- <input name="novedad" value="sin novedad" type="hidden"> --}}

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary modify_historical" id="btn-entregar-ambiente">Entregar Ambiente</button>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="col-md-8">
        <i class="fa fa-fw fa-search"></i>
        <input type="search" id="wnombre_ambiente" class="form-control search-navbar" placeholder="Buscar ambiente" autocomplete="off" autofocus>
    </div> -->
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
                            <div class="desc-1">
                                <h5 class="" data-nombreClr="{{ $clr->nombre_ambiente }}">{{ $clr->nombre_ambiente }}</h5>
                            </div>
                            <hr>
                            <div class="desc-1">
                                <p>El ambiente está inactivo.</p>
                            </div>
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
                            <div class="desc-1">
                                <h5 class="">{{ $clr->nombre_ambiente }}</h5>
                            </div>
                            <span class="circle"><i class="fa fa-fw fa-minus"></i></span>
                            <hr class="hr-repair">
                            <div class="desc-1">
                                <p>El ambiente se encuentra en reparación</p>
                            </div>
                        </div>
                    </div>
                </div>
                @elseif($clr->disponibilidad == 'no disponible')
                <div>
                    <div id="{{ $clr->id }}" class="classroom-card card clr-entregar" data-toggle="modal" data-target="#modal_entregar_ambiente" data-id-ambiente="{{ $clr->id }}" data-prestamo="{{ $clr->prestado_en }}" data-id-instructor="{{ $clr->instructor->id }}" data-id-classgroup="{{ $clr->class_group_id }}" >
                        <div class="clr-img">
                            <img src="{{ asset($clr->imagen) }}" alt="" class="img-classroom img-responsive">
                            @php

                                $dt1=new Jenssegers\Date\Date($clr->prestado_en);

                            @endphp
                            <div class="info-clr">Ambiente en uso <span class="pull-right">{{ $dt1->format('l d F Y h:i A') }}</span></div>
                        </div>
                        <div class="clr-desc">
                            <div class="desc-1">
                                <h5 class="" data-nombre-ambiente="{{ $clr->nombre_ambiente }}">{{ $clr->nombre_ambiente }}</h5>
                            </div>
                            <hr>
                            <div class="desc-1 desc-prestamo">
                                <div class="text-capitalize">{{ $clr->instructor->nombre.' '.$clr->instructor->apellidos }}</div>
                                <div class="clr-classgroup">{{ $clr->classgroup->nombre_ficha }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div>
                    <div class="classroom-card card amb-disponible" data-id-ambiente="{{ $clr->id }}" data-toggle="modal" data-target="#modal_solicitar_prestamo" id="ffd">
                        <div class="clr-img">
                            <img src="{{ asset($clr->imagen) }}" alt="" class="img-classroom img-responsive">
                        </div>
                        <div class="clr-desc">
                            <span class="circle"></span>
                            <div class="desc-1">
                                <h5 class="" data-nombre-ambiente="{{ $clr->nombre_ambiente }}">{{ $clr->nombre_ambiente }}</h5>
                            </div>
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
                    @foreach($dataHistoryR as $his)
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
