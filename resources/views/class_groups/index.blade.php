@extends('layouts.app')
@section('navbar-top')
<div class="search-navbar-wrapper">
    <i class="fa fa-fw fa-search"></i>
    <input type="text" id="myInputFicha" onkeyup="filterTableFicha()" placeholder="Buscar por ficha de grupo" class="form-control search-navbar">
</div>
@endsection
@section('big-content-desc')
@endsection
@section('content')

@include('layouts.messages')
<!-- <blockquote class="">
    <p>Si desea realizar una importación de un archivo de excel, por favor primero elimine todos los registros de esta tabla</p>
    <form action="{{ url('/admin/class_group/truncate') }}" method="POST" style="display: inline-block;" class="form-truncate-ficha btn">
        {!! csrf_field()  !!}
        <i class="fa fa-fw fa-trash"></i>
        Eliminar todos los registros
    </form>
</blockquote>
<form action="{{ url('admin/class_group/import') }}" enctype="multipart/form-data" method="POST">
    {{ csrf_field() }}
    <input type="file" name="imported-file" class="form-control" accept=".xlsx">
    <button type="submit">Importar</button>
</form> -->
<div class="card">
    <a href="{{ url('/admin/class_group/create') }}"><i class="fa fa-fw fa-plus"></i> Añadir una nueva ficha</a>
    <div class="table-responsive">
        <table class="table table-full table-hover">
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
                @foreach($dataClassGroup as $dg)
                <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{ $dg->id_ficha }}</td>
                    <td>{{ $dg->nombre_ficha }}</td>
                    <td>{{ $dg->tipo_formacion }}</td>
                    <td class="td-actions">
                        <a class="btn btn-action" href="{{ url('/admin/class_group/'.$dg->id) }}">
                            <i class="fa fa-fw fa-search"></i>
                        </a>
                        <a class="btn btn-action" href="{{ url('/admin/class_group/'.$dg->id.'/edit') }}">
                            <i class="fa fa-fw fa-pencil"></i>
                            Editar
                        </a>
                        <form action="{{ url('/admin/class_group/'.$dg->id) }}" style="display: inline-block;"data-nombre="{{ $dg->nombre_ficha }}"  method="POST" class="btn-delete-tbl btn btn-action">
                            {{ method_field('delete') }}
                            {!! csrf_field()  !!}
                            <i class="fa fa-fw fa-trash"></i>
                            Eliminar
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
