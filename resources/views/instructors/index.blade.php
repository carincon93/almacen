@extends('layouts.app')

@section('navbar-top')
<div class="search-navbar-wrapper">
    <i class="fa fa-fw fa-search"></i>
    <input type="text" id="myInputIns" onkeyup="filterTableIns()" placeholder="Buscar instructor" class="form-control search-navbar">
</div>
@endsection

@section('big-content-desc')
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
                Está seguro que desea eliminar este instructor?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-danger" id="delete-ins">Eliminar Instructor</button>
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
                    <th>#</th>
                    <th>Nombre Instructor</th>
                    <th>Área</th>
                    <th>No Celular</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="myTableIns">
                @php
                $count = 1;
                @endphp
                @foreach($dataInstructor as $ins)
                <tr>
                    <td>{{ $count++ }}</td>
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
                        @if($ins->disponibilidad == 'disponible')
                        <form action="{{ url('/admin/instructor/'.$ins->id) }}" method="POST" style="display:inline-block;" class="form-delete-ins btn-danger btn">
                            {{ method_field('delete') }}
                            {!! csrf_field()  !!}
                            <button class="btn-delete" data-nombre="{{ $ins->nombre.' '.$ins->apellidos }}">
                                <i class="fa fa-fw fa-trash"></i>
                            </button>
                        </form>
                        @else
                        <a href="{{ url('/') }}" class="btn" title="El instructor tiene un ambiente a cargo, para poder eliminarlo primero debe hacer la entrega del ambiente. Haga clic en este elemento para direccionarte al préstamo de ambientes">
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

@push('scripts')
    <script>
        function filterTableIns() {
            var input, filter, table, tr, td, i;
            input = document.getElementById("myInputIns");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTableIns");
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
