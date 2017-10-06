@extends('layouts.app')

@section('big-content-desc')
<div class="clearfix">
    <div class="col-md-6">
        <h5>Selecciona dos fechas para buscar dentro del historial</h5>
        <div class="input-daterange input-group datapickerr" id="datepicker">
            <input type="text" class="input-sm form-control" name="inicio"  autocomplete="off" />
            <span class="input-group-addon">hasta</span>
            <input type="text" class="input-sm form-control" name="fin" autocomplete="off" />
        </div>
        <br>
        <div>
            <button type="button" class="btn btn-success enviarfechas">Buscar por fechas</button>
            <button type="button" class="btn btn-default reset">Borrar fechas</button>
        </div>

    </div>
    <div class="col-md-6">
        <p>Si quieres exportar todo el historial de prestamos a un archivo de excel, da clic en 'Exportar historial'</p>
        <a href="{{ url('history_record/excel') }}" class="btn btn-success"><i class="fa fa-cloud-download"></i> Exportar historial</a>
    </div>
</div>
@endsection

@section('content')

@include('layouts.messages')
@include('layouts.modal')
<div class="card">
    <div class="table-responsive">
        <table class="table table-full table-hover">
            <thead>
                <tr>
                    <th class="tbl-fichas">Ficha</th>
                    <th>Instructor</th>
                    <th>Ambiente</th>
                    <th>Prestado en</th>
                    <th>Entregado en</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="history">
            @foreach($history_records as $his)
                <tr>
                    <td class="text-capitalize">
                        ID: {{ $his->classgroup->id_ficha }}
                        <div class="">
                            {{ $his->classgroup->nombre_ficha }}
                        </div>
                    </td>
                	<td class="text-capitalize">{{ $his->instructor->nombre.' '.$his->instructor->apellidos }}</td>
                	<td class="text-capitalize">{{ $his->classroom->nombre_ambiente }}</td>
                    <td>{{ $his->prestado_en }}</td>
                    <td>{{ $his->entregado_en != '' ? $his->entregado_en : 'No ha sido entregado aún' }}</td>

                    <td class="td-actions">
                        <button class="btn btn-historial" data-toggle="modal" data-target="#modalHistorial" data-id="{{ $his->id }}" data-nombre="{{ $his->Classroom->nombre_ambiente }}">
                            Ver novedades
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
