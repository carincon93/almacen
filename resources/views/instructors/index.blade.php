@extends('layouts.app')

@section('navbar-top')
<div class="search-navbar-wrapper">
    <i class="fa fa-fw fa-search"></i>
    <input type="text" id="myInputIns" onkeyup="filterTableIns()" placeholder="Buscar por nombre de instructor" class="form-control search-navbar">
</div>
@endsection

@section('big-content-desc')
@endsection

@section('content')
@include('layouts.messages')
<a href="{{ url('/admin/instructor/create') }}" class="btn action-round"><i class="fa fa-fw fa-user-plus"></i></a>
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
                        <a class="btn btn-round" href="{{ url('/admin/instructor/'.$ins->id) }}">
                            <i class="fa fa-fw fa-search"></i>
                        </a>
                        <a class="btn btn-round" href="{{ url('/admin/instructor/'.$ins->id.'/edit') }}">
                            <i class="fa fa-fw fa-edit"></i>
                        </a>
                        @if($ins->disponibilidad == 'disponible')
                        <form action="{{ url('/admin/instructor/'.$ins->id) }}" method="POST" class="btn-round btn-delete-tbl btn"  data-nombre="{{ $ins->nombre.' '.$ins->apellidos }}">
                            {{ method_field('delete') }}
                            {!! csrf_field()  !!}
                            <i class="fa fa-fw fa-trash"></i>
                        </form>
                        @else
                        <a href="{{ url('/#').$ins->classroom->id }}" class="btn btn-round btn-not-delete" data-title="El instructor tiene un ambiente a cargo, para poder eliminarlo primero debe hacer la entrega del ambiente. Haga clic en este elemento para direccionarte al préstamo de ambientes" data-toggle="tooltip" data-placement="bottom">
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
