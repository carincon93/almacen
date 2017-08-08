@extends('layouts.app')

@section('form-search')
<div class="search-navbar-wrapper">
    {!! csrf_field() !!}
    <i class="fa fa-fw fa-search"></i>
    <input type="search" class="form-control search-navbar" autocomplete="off" id="hnombre_instructor" placeholder="Buscar instructor">
</div>
@endsection

@section('big-content-desc')
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
                Esta seguro que desea eliminar este instructor?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="delete-ins">Eliminar Instructor</button>
            </div>
        </div>
    </div>
</div>
@include('layouts.messages')
<a href="{{ url('/admin/instructor/create') }}" class="btn"><i class="fa fa-fw fa-user-plus"></i> Añadir</a>
<!-- <blockquote class="note success">
    <p>
        Si quieres añadir un nuevo instructor por favor da clic en 'Añadir'
    </p>
</blockquote> -->
<div class="card">
    <div class="table-responsive">
        <table class="table table-full table-hover" data-form="deleteForm">
            <thead>
                <tr>
                    <th>Nombre Instructor</th>
                    <th>Área</th>
                    <th>No Celular</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="tinstructors">
                @foreach($dataInstructor as $ins)
                <tr>
                    <td>{{ $ins->nombre.' '.$ins->apellidos }}</td>
                    <td>{{ $ins->area }}</td>
                    <td>{{ $ins->celular }}</td>
                    <td>
                        <a class="btn" href="{{ url('/admin/instructor/'.$ins->id) }}">
                            <i class="fa fa-fw fa-search"></i>
                        </a>
                        <a class="btn" href="{{ url('/admin/instructor/'.$ins->id.'/edit') }}">
                            <i class="fa fa-fw fa-pencil"></i>
                        </a>
                        <form action="{{ url('/admin/instructor/'.$ins->id) }}" method="POST" style="display:inline-block;" class="form-delete btn">
                            {{ method_field('delete') }}
                            {!! csrf_field()  !!}
                            <button class="btn-delete-instructor">
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
