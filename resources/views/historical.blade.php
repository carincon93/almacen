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
                    <th>Fecha Prestado:</th>
                    <th>Fecha Entregado:</th>
                    <th>Novedad</th>
                </tr>
            </thead>
            <tbody>
            @foreach($Historical_record as $his)
                <tr>
                	<td>{{$his->id}}</td>
                	<td>{{$his->instructor->nombre.' '.$his->instructor->apellidos  }}</td>
                	<td>{{$his->classroom->nombre_ambiente}}</td>
                	<td>{{$his->borrowed_at}}</td>
					
					@if($his->delivered_at)
					<td>{{$his->delivered_at}}</td>
                	@else
                	<td>Sin Entrega</td>
					@endif

					@if($his->novedad)
                	<td>{{$his->novedad}}</td>
					@else
					<td>Sin novedad</td>
					@endif
                </tr>
               @endforeach
            </tbody>
        </table>
    </div>
</div>



@endsection
