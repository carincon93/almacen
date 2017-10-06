@foreach($hr as $h)
    <tr>
        <td class="text-capitalize">
            ID: {{ $his->classgroup->id_ficha }}
            <div class="">
                {{ $his->classgroup->nombre_ficha }}
            </div>
        </td>
        <td class="text-capitalize">{{ $his->instructor->nombre.' '.$his->instructor->apellidos }}</td>
        <td class="text-capitalize">{{ $his->classroom->nombre_ambiente }}</td>
        <td>{{ $his->prestado_en }}</td>
        <td>{{ $his->entregado_en != '' ? $his->entregado_en : 'No ha sido entregado aún' }}</td>

        <td class="td-actions">
            <button class="btn btn-historial" data-toggle="modal" data-target="#modalHistorial" data-id="{{ $his->id }}" data-nombre="{{ $his->Classroom->nombre_ambiente }}">
                Ver novedades
            </button>
            <form action="{{ url('/admin/history_record/'.$his->id) }}" data-nombre="{{ $his->classgroup->id_ficha }}" method="POST" style="display: inline-block;" class="btn btn-round btn-delete-tbl">
                {{ method_field('delete') }}
                {!! csrf_field()  !!}
                <i class="fa fa-fw fa-trash"></i>
            </form>
        </td>
    </tr>
@endforeach
