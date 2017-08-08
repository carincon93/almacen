@extends('layouts.app')
@section('form-search')
<div class="search-navbar-wrapper">
    {!! csrf_field() !!}
    <i class="fa fa-fw fa-search"></i>
    <input type="search" class="form-control search-navbar" id="hnombre_ambiente" placeholder="Buscar ambiente" autocomplete="off">
</div>
@endsection
@section('big-content-desc')
<a href="{{ url('/admin/classroom/create') }}"><i class="fa fa-fw fa-plus"></i> Añadir un nuevo ambiente</a>
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
                Esta seguro que desea eliminar este ambiente?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="delete-clr">Eliminar Ambiente</button>
            </div>
        </div>
    </div>
</div>
@include('layouts.messages')
<div class="card">
    <div class="table-responsive">
        <table class="table table-full table-hover" data-form="deleteForm">
            <thead>
                <tr>
                    <th>Nombre Ambiente</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="tclassrooms">
                @foreach($dataClassroom as $clr)
                <tr>
                    <td>{{ $clr->nombre_ambiente }}</td>
                    <td>
                        <a class="btn" href="{{ url('/admin/classroom/'.$clr->id) }}">
                            <i class="fa fa-fw fa-search"></i>
                        </a>
                        <a class="btn" href="{{ url('/admin/classroom/'.$clr->id.'/edit') }}">
                            <i class="fa fa-fw fa-pencil"></i>
                        </a>
                        <form action="{{ url('/admin/classroom/'.$clr->id) }}" method="POST" style="display: inline-block;" class="form-delete btn">
                            {{ method_field('delete') }}
                            {!! csrf_field()  !!}
                            <button type="button" class="btn-delete-classroom">
                                <i class="fa fa-fw fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="table-footer clearfix">
            <div class="col-md-6">
                Total de ambientes
            </div>
            <div class="col-md-6">
                {{ $dataClassroom->links() }}
            </div>
        </div>

    </div>
</div>
@endsection
