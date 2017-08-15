@extends('layouts.app')
@section('navbar-top')
<div class="search-navbar-wrapper">
    <i class="fa fa-fw fa-search"></i>
    <input type="text" id="myInputAdm" onkeyup="filterTableAdm()" placeholder="Buscar admin por nombre" class="form-control search-navbar">
</div>
@endsection
@section('big-content-desc')
<a href="{{ url('/admin/admin/create') }}"><i class="fa fa-fw fa-plus"></i> Añadir un nuevo administrador</a>
@endsection
@section('content')
<!-- Modal -->
<div class="modal fade" id="confirm-delete">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-capitalize" id="myModalLabel"></h4>
            </div>
            <div class="modal-body">
                Está seguro que desea eliminar este administrador?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-danger" id="delete-ad">Eliminar Administrador</button>
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
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody  id="myTableAdm">
                @php
                $count = 1;
                @endphp
                @foreach($dataAdmin as $ad)
                <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{ $ad->name }}</td>
                    <td>
                        <a class="btn" href="{{ url('/admin/admin/'.$ad->id) }}">
                            <i class="fa fa-fw fa-search"></i>
                        </a>
                        <a class="btn" href="{{ url('/admin/admin/'.$ad->id.'/edit') }}">
                            <i class="fa fa-fw fa-pencil"></i>
                        </a>
                        <form action="{{ url('/admin/admin/'.$ad->id) }}" method="POST" style="display: inline-block;" class="form-delete-admin btn btn-danger">
                            {{ method_field('delete') }}
                            {!! csrf_field()  !!}

                            <button type="button" class="btn-delete" data-nombre="{{ $ad->name }}">
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

@push('scripts')
    <script>
        function filterTableAdm() {
            var input, filter, table, tr, td, i;
            input = document.getElementById("myInputAdm");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTableAdm");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
@endpush
