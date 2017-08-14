@extends('layouts.app')
@section('navbar-top')
<div class="search-navbar-wrapper">
    <i class="fa fa-fw fa-search"></i>
    <input type="text" id="myInput" onkeyup="filterTableClr()" placeholder="Buscar usuario" class="form-control search-navbar">
    <!-- <input type="search" class="form-control search-navbar" id="hnombre_ambiente" placeholder="Buscar ambiente" autocomplete="off" onkeyup="searchClassroom()"> -->
</div>
@endsection
@section('big-content-desc')
<a href="{{ url('/admin/user/create') }}"><i class="fa fa-fw fa-plus"></i> Añadir un nuevo administrador</a>
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
                    <th>nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody  id="myTable">
                @php
                $count = 1;
                @endphp
                @foreach($dataUser as $ad)
                <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{ $ad->name }}</td>
                    <td>
                        <a class="btn" href="{{ url('/admin/user/'.$ad->id) }}">
                            <i class="fa fa-fw fa-search"></i>
                        </a>
                        <a class="btn" href="{{ url('/admin/user/'.$ad->id.'/edit') }}">
                            <i class="fa fa-fw fa-pencil"></i>
                        </a>
                        <form action="{{ url('/admin/user/'.$ad->id) }}" method="POST" style="display: inline-block;" class="form-delete-admin btn">
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
        function filterTableFile() {
            var input, filter, table, tr, td, i;
            input = document.getElementById("myInputUser");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTableUser");
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
