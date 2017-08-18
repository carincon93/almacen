@extends('layouts.app')
@section('navbar-top')
<div class="search-navbar-wrapper">
    <i class="fa fa-fw fa-search"></i>
    <input type="text" id="myInputFicha" onkeyup="filterTableFicha()" placeholder="Buscar por ficha de grupo" class="form-control search-navbar">
</div>
@endsection
@section('big-content-desc')
<a href="{{ url('/admin/class_group/create') }}"><i class="fa fa-fw fa-plus"></i> Añadir una nueva ficha</a>
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
                Está seguro que desea eliminar esta ficha?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-danger" id="delete-ficha">Eliminar Ficha</button>
            </div>
        </div>
    </div>
</div>
@include('layouts.messages')
<form action="{{ url('class_group/import') }}" enctype="multipart/form-data" method="POST">
    {{ csrf_field() }}
    <input type="file" name="imported-file" class="form-control" accept=".xlsx">
    <button type="submit">Importar</button>
</form>
<div class="card">
    <div class="table-responsive">
        <table class="table table-full table-hover" data-form="deleteForm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID de ficha</th>
                    <th>Nombre ficha</th>
                    <th>Tipo de formación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody  id="myTableFicha">
                @php
                $count = 1;
                @endphp
                @foreach($dataGroup as $dg)
                <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{ $dg->id_ficha }}</td>
                    <td>{{ $dg->nombre_ficha }}</td>
                    <td>{{ $dg->tipo_formacion }}</td>
                    <td>
                        <a class="btn" href="{{ url('/admin/class_group/'.$dg->id) }}">
                            <i class="fa fa-fw fa-search"></i>
                        </a>
                        <a class="btn" href="{{ url('/admin/class_group/'.$dg->id.'/edit') }}">
                            <i class="fa fa-fw fa-pencil"></i>
                        </a>
                        <form action="{{ url('/admin/class_group/'.$dg->id) }}" method="POST" style="display: inline-block;" class="form-delete-ficha btn btn-danger">
                            {{ method_field('delete') }}
                            {!! csrf_field()  !!}
                            <button type="button" class="btn-delete" data-nombre="{{ $dg->nombre_ficha }}">
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
        function filterTableFicha() {
            var input, filter, table, tr, td, i;
            input = document.getElementById("myInputFicha");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTableFicha");
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
