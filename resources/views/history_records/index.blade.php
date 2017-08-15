@extends('layouts.app')
@section('content')
<div class="card">
    <div class="table-responsive">
        <table class="table table-full table-hover" data-form="deleteForm">
            <div class="modal fade" id="confirm-delete">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title text-capitalize" id="myModalLabel"></h4>
                        </div>
                        <div class="modal-body">
                            Está seguro que desea eliminar este historial?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-danger" id="delete-historical">Eliminar Historial</button>
                        </div>
                    </div>
                </div>
            </div>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Instructor</th>
                    <th>Ambiente</th>
                    <th>Fecha Prestado</th>
                    <th>Fecha Entregado</th>
                    <th>Novedad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            @php
            $count = 1;
            @endphp
            @foreach($history_record as $his)
                <tr>
                	<td>{{$count++}}</td>
                	<td>{{$his->instructor->nombre.' '.$his->instructor->apellidos  }}</td>
                	<td>{{ $his->classroom->nombre_ambiente}}</td>
                	<td>{{ $his->prestado_en }}</td>
                    <td>{{ $his->entregado_en != '' ? $his->entregado_en : 'Sin entrega'}}</td>
                    <td>{{ $his->novedad != '' ? $his->novedad : 'Sin novedad'}}</td>
                    <td>
                        <form action="{{ url('/admin/history_record/'.$his->id) }}" method="POST" style="display: inline-block;" class="form-delete-historical btn btn-danger">
                            {{ method_field('delete') }}
                            {!! csrf_field()  !!}
                            <button type="button" class="btn-delete" data-nombre="{{ $his->instructor->nombre }}">
                                <i class="fa fa-fw fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
               @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
