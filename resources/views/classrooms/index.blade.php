@extends('layouts.app')
@section('big-content-desc')
    <a href="{{ url('/admin/classroom/create') }}" class="btn action-round"><i class="fa fa-fw fa-plus"></i></a>
    <ul class="breadcrumb">
    	<li>Lista de ambientes</li>
    </ul>
@endsection
@section('content')
    @include('layouts.messages')
    <div class="card">
        <div class="table-responsive card-content">
            <table class="table table-full table-hover" id="myTable" data-form="deleteForm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre de ambiente</th>
                        <th>Tipo de ambiente</th>
                        <th>Estado</th>
                        <th>Cupo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody  id="myTable">
                    @php
                    $count = 1;
                    @endphp
                    @foreach($dataClassroom as $clr)
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td>{{ $clr->nombre_ambiente }}</td>
                            <td>{{ $clr->tipo_ambiente }}</td>
                            <td>{{ $clr->estado }}</td>
                            <td>{{ $clr->cupo }}</td>
                            <td class="td-actions">
                                <a class="btn btn-round" href="{{ url('/admin/classroom/'.$clr->id) }}">
                                    <i class="fa fa-fw fa-search"></i>
                                </a>
                                <a class="btn btn-round" href="{{ url('/admin/classroom/'.$clr->id.'/edit') }}">
                                    <i class="fa fa-fw fa-edit"></i>
                                </a>
                                @if($clr->disponibilidad == 'disponible')
                                    <form action="{{ url('/admin/classroom/'.$clr->id) }}" data-nombre="{{ $clr->nombre_ambiente }}" method="POST" style="display: inline-block;" class="btn-delete-tbl btn btn-round btn-round">
                                        {{ method_field('delete') }}
                                        {!! csrf_field()  !!}
                                        <i class="fa fa-fw fa-trash"></i>
                                    </form>
                                @else
                                    <a href="{{ url('/#').$clr->id }}" class="btn btn-round btn-not-delete" data-title="El ambiente aun esta en uso, para poder eliminarlo primero debe hacer la entrega del ambiente. Haga clic en este elemento para direccionarte al préstamo de ambientes" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-fw fa-trash"></i>
                                    </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
