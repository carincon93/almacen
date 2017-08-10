@extends('layouts.app')
@section('form-search')
<div class="search-navbar-wrapper">
    {!! csrf_field() !!}
    <i class="fa fa-fw fa-search"></i>
    <input type="search" id="wnombre_ambiente" class="form-control search-navbar" placeholder="Buscar ambiente" autocomplete="off">
</div>
@endsection
@section('big-content-desc')
<h4><i class="fa fa-fw fa-key"></i>Prestar ambiente</h4>
@endsection
@section('content')
    <!-- Modal -->
    <div class="modal fade" id="confirm">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <h3 class="text-capitalize"></h3>

                    {!! csrf_field() !!}
                    <input type="search" id="numero_documento" class="form-control" placeholder="Documento Instructor" autocomplete="off">
                    <br><br>
                    
                    <form action="" method="POST" id="form-request">
                        {!! csrf_field() !!}
                        <input name="id" type="hidden" value="" id="id">
                        <input name="borrowed_at" type="hidden" value="{{ date('Y-m-d H:i:s') }}">
                        <div class="form-group">
                            <select name="instructor_id" class="form-control text-capitalize" id="docinstructor"  required>
                                <option value>Seleccione un instructor</option>
                                @foreach($dataInstructor as $ins)
                                <option value="{{ $ins->id }}">{{ $ins->nombre.' '.$ins->apellidos }}</option>
                                @endforeach
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary save_entrie" id="submit-request">Prestar Ambiente</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="delivery">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <h3 class="text-capitalize"></h3>
                    <form action="" method="POST" id="form-delivery">
                        {!! csrf_field() !!}
                        <input name="id" type="hidden" value="" id="id-clrdelivery">
                        <input name="borrowed_at" type="hidden" value="" id="borrowed-clrdelivery">
                        <input name="delivered_at" type="hidden" value="{{ date('Y-m-d H:i:s') }}">
                        <div class="form-group">
                            <label class="label-control">Agregar novedad</label>
                            <textarea name="novedad" rows="8" cols="80" class="form-control"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary modify_entrie" id="submit-delivery">Entregar Ambiente</button>
                </div>
            </div>
        </div>
    </div>
    <div id="classroom-section">
        @foreach($dataClassroom->chunk(3) as $chunk)
        <div class="row">
            @foreach($chunk as $clr)
            <div class="col-md-4">
                @if($clr->estado == 'inactivo')
                <div>
                    <div class="classroom-card clr-inactive card">
                        <h5 class="text-capitalize">{{ $clr->nombre_ambiente }}</h5>
                        <hr>
                        <div>
                            <p>El ambiente está inactivo</p>
                        </div>
                    </div>
                </div>
                @elseif($clr->estado == 'en reparacion')
                <div>
                    <div class="classroom-card clr-repair card">
                        <h5 class="text-capitalize">{{ $clr->nombre_ambiente }}</h5>
                        <hr class="hr-repair">
                        <div>
                            <p>El ambiente se encuentra en reparación</p>
                        </div>
                    </div>
                </div>
                @elseif($clr->disponibilidad == 'no disponible')
                <div>
                    <div class="classroom-card clr-borrowed card" data-id="{{ $clr->id }}" data-borrowed="{{ $clr->borrowed_at }}">
                        <h5 class="text-capitalize">{{ $clr->nombre_ambiente }}</h5>
                        <hr>
                        <div class="text-capitalize"><i class="fa fa-fw fa-circle"></i>{{ $clr->instructor->nombre.' '.$clr->instructor->apellidos }}</div>
                        <span class="badge borrowed-info">{{ $clr->borrowed_at }}</span>
                    </div>
                </div>
                @else
                <div>
                    <div class="classroom-card clr-empty card" data-id="{{ $clr->id }}">
                        <h5 class="text-capitalize">{{ $clr->nombre_ambiente }}</h5>
                        <hr>
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
