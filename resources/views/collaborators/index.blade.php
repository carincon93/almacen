@extends('layouts.app')
@section('navbar-top')
<div class="search-navbar-wrapper">
    <i class="fa fa-fw fa-search"></i>
    <input type="text" id="myInputAdm" onkeyup="filterTableAdm()" placeholder="Buscar admin por nombre" class="form-control search-navbar">
</div>
@endsection
@section('big-content-desc')
<a href="{{ url('/admin/collaborator/create') }}" class="btn action-round"><i class="fa fa-fw fa-plus"></i></a>
@endsection
@section('content')
@include('layouts.modal')
@include('layouts.messages')
<div class="card">
    <div class="table-responsive">
        <table class="table table-full table-hover">
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
                @foreach($dataCollaborator as $adm)
                <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{ $adm->name }}</td>
                    <td>
                        <a class="btn btn-round" href="{{ url('/admin/collaborator/'.$adm->id) }}">
                            <i class="fa fa-fw fa-search"></i>
                        </a>
                        <a class="btn btn-round" href="{{ url('/admin/collaborator/'.$adm->id.'/edit') }}">
                            <i class="fa fa-fw fa-edit"></i>
                        </a>
                        <form action="{{ url('/admin/collaborator/'.$adm->id) }}" data-nombre="{{ $adm->name }}" method="POST" style="display: inline-block;" class="btn-delete-tbl btn-round btn">
                            {{ method_field('delete') }}
                            {!! csrf_field()  !!}
                            <i class="fa fa-fw fa-trash"></i>
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
