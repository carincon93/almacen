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
@include('layouts.messages')
<!-- <blockquote class="">
    <p>Si desea realizar una importación de un archivo de excel, por favor primero elimine todos los registros de esta tabla</p>
    <form action="{{ url('/admin/classroom/truncate') }}" method="POST" style="display: inline-block;" class="form-truncate-ficha btn">
        {!! csrf_field()  !!}
        <i class="fa fa-fw fa-trash"></i>
        Eliminar todos los registros
    </form>
</blockquote>
<form action="{{ url('admin/instructor/import') }}" enctype="multipart/form-data" method="POST">
    {{ csrf_field() }}
    <input type="file" name="imported-file" class="form-control" accept=".xlsx">
    <button type="submit">Importar</button>
</form> -->
<a href="{{ url('/admin/instructor/create') }}" class="btn"><i class="fa fa-fw fa-user-plus"></i> Añadir</a>
<div class="card">
    <div class="table-responsive">
        <table class="table table-full table-hover">
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
                    <td class="td-actions">
                        <a class="btn btn-action" href="{{ url('/admin/instructor/'.$ins->id) }}">
                            <i class="fa fa-fw fa-search"></i>
                        </a>
                        <a class="btn btn-action" href="{{ url('/admin/instructor/'.$ins->id.'/edit') }}">
                            <i class="fa fa-fw fa-edit"></i>
                            Editar
                        </a>
                        @if($ins->disponibilidad == 'disponible')
                        <form action="{{ url('/admin/instructor/'.$ins->id) }}" method="POST" class="btn-action btn-delete-tbl btn"  data-nombre="{{ $ins->nombre.' '.$ins->apellidos }}">
                            {{ method_field('delete') }}
                            {!! csrf_field()  !!}
                            <i class="fa fa-fw fa-trash"></i>
                            Eliminar
                        </form>
                        @else
                        <a href="{{ url('/') }}" class="btn btn-action btn-not-delete" title="El instructor tiene un ambiente a cargo, para poder eliminarlo primero debe hacer la entrega del ambiente. Haga clic en este elemento para direccionarte al préstamo de ambientes">
                            <i class="fa fa-fw fa-trash"></i>
                            Eliminar
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
