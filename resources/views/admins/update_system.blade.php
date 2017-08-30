@extends('layouts.app')

@section('content')
@include('layouts.messages')
<form action="{{ url('admin/dashboard/import') }}" enctype="multipart/form-data" method="POST">
    {{ csrf_field() }}
    <input type="file" name="imported-file" class="form-control" accept=".xlsx">
    <button type="submit">Importar</button>
</form>
<form action="{{ url('/admin/all_entries/truncate') }}" method="POST" style="display: inline-block;" class="form-truncate-ficha btn">
    {!! csrf_field()  !!}
    <i class="fa fa-fw fa-trash"></i>
    Eliminar todos los registros
</form>
@endsection
