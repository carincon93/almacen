@extends('layouts.app')
@section('content')
<div class="card">
    <div class="table-responsive">
        <table class="table table-full table-hover" data-form="deleteForm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Instructor</th>
                    <th>Ambiente</th>
                    <th>Fecha Prestado</th>
                    <th>Fecha Entregado</th>
                    <th>Novedad</th>
                </tr>
            </thead>
            <tbody>
            @php
            $count = 1;
            @endphp
            @foreach($historical_record as $his)
                <tr>
                	<td>{{$count++}}</td>
                	<td>{{$his->instructor->nombre.' '.$his->instructor->apellidos  }}</td>
                	<td>{{ $his->classroom->nombre_ambiente}}</td>
                	<td>{{ $his->prestado_en }}</td>
                    <td>{{ $his->entregado_en != '' ? $his->entregado_en : 'Sin entrega'}}</td>
                    <td>{{ $his->novedad != '' ? $his->novedad : 'Sin novedad'}}</td>
                </tr>
               @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
