@extends('layouts.app')
@section('content')
@include('layouts.modal')
<div class="modal fade" id="modalFormNovedad">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-capitalize" id="myModalLabel"></h4>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="formNovedadNueva">
                    {{ csrf_field() }}
                    <div class="form-group" id="novedad_vieja"></div>
                    <div class="form-group">
                        <label for="novedad_nueva" class="control-label">Nueva novedad</label>
                        <textarea name="novedad_nueva" rows="4" cols="80" class="form-control" autofocus></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-danger" id="btn-novedad-nueva">Añadir novedad</button>
            </div>
        </div>
    </div>
</div>

<a href="{{ url('history_record/excel') }}" class="btn btn-success"><i class="fa fa-cloud-download"></i> Exportar Historial a Excel</a>
    <form action="{{ url('datesearch') }}" method="POST">
        {!! csrf_field()  !!} 
        <h5>hacer busqueda por fecha</h5>
        <div class="row">
            <div class="col-md-6">
                <div class="input-daterange input-group datapickerr" id="datepicker">
                    <input type="text" class="input-sm form-control" name="inicio"  autocomplete="off" />
                    <span class="input-group-addon">hasta</span>
                    <input type="text" class="input-sm form-control" name="fin" autocomplete="off" />
                </div>
                <br>
                <div>
                    <button type="button" class="btn btn-primary enviarfechas">enviar</button>
                    <button type="button" class="btn btn-danger reset">borrar fechas</button>
                </div>
                
            </div>
        </div>
    </form>
<div class="card">
    <div class="table-responsive">
        <table class="table table-full table-hover">
            <thead>
                <tr>
                    <th>Ficha</th>
                    <th>Instructor</th>
                    <th>Ambiente</th>
                    <th>Novedad</th>
                    <th>Novedad nueva</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="history">
            @foreach($history_records as $his)
                <tr>
                    <td class="text-capitalize">{{ $his->cLassgroup->id_ficha.' '.$his->nombre_ficha }}</td>
                	<td class="text-capitalize">{{ $his->instructor->nombre.' '.$his->instructor->apellidos }}</td>
                	<td class="text-capitalize">{{ $his->classroom->nombre_ambiente}}</td>
                    <td>{{ $his->novedad != '' ? $his->novedad : 'Sin novedad'}}</td>
                    <td class="novedad_nueva" data-target="#modalFormNovedad" data-toggle="modal" data-id-historial="{{$his->id}}">{{ $his->novedad_nueva != '' ? $his->novedad_nueva : ''}}</td>

                    <td class="td-actions">
                    <button class="btn btn-historial" data-toggle="modal" data-target="#modalHistorial" data-id="{{ $his->id }}" data-nombre="{{ $his->Classroom->nombre_ambiente }}">
                            Ver historial
                        </button>
                        <form action="{{ url('/admin/history_record/'.$his->id) }}" data-nombre="{{ $his->classgroup->id_ficha }}" method="POST" style="display: inline-block;" class="btn btn-round btn-delete-tbl">
                            {{ method_field('delete') }}
                            {!! csrf_field()  !!}
                            <i class="fa fa-fw fa-trash"></i>
                        </form>
                    </td>
                </tr>
               @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
