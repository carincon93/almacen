@foreach($hr as $h)
    <tr>
        <td class="text-capitalize">{{ $h->id_ficha }}</td>
        <td class="text-capitalize">{{ $h->nombre.' '.$h->apellidos }}</td>
        <td class="text-capitalize">{{ $h->nombre_ambiente}}</td>
        <td>{{ $h->prestado_en}}</td>
        <td>{{ $h->entregado_en}}</td>
        <td class="td-actions">
            <i class="fa fa-fw fa-calendar-o btn btn-round"></i>
            <form action="{{ url('/admin/history_record/'.$h->id) }}" data-nombre="{{ $h->id_ficha }}" method="POST" style="display: inline-block;" class="btn btn-round btn-delete-tbl">
                {{ method_field('delete') }}
                {!! csrf_field()  !!}
                <i class="fa fa-fw fa-trash"></i>
            </form>
        </td>
    </tr>
   @endforeach
