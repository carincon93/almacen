
            @foreach($hr as $h)
                <tr>
                    <td class="text-capitalize">{{ $h->cLassgroup->id_ficha.' '.$h->nombre_ficha }}</td>
                    <td class="text-capitalize">{{ $h->instructor->nombre.' '.$h->instructor->apellidos }}</td>
                    <td class="text-capitalize">{{ $h->classroom->nombre_ambiente}}</td>
                    <td>{{ $h->novedad != '' ? $h->novedad : 'Sin novedad'}}</td>
                    <td class="novedad_nueva" data-target="#modalFormNovedad" data-toggle="modal" data-id-htorial="{{$h->id}}">{{ $h->novedad_nueva != '' ? $h->novedad_nueva : ''}}</td>

                    <td class="td-actions">
                        <i class="fa fa-fw fa-calendar-o btn btn-round"></i>
                        <form action="{{ url('/admin/history_record/'.$h->id) }}" data-nombre="{{ $h->classgroup->id_ficha }}" method="POST" style="display: inline-block;" class="btn btn-round btn-delete-tbl">
                            {{ method_field('delete') }}
                            {!! csrf_field()  !!}
                            <i class="fa fa-fw fa-trash"></i>
                        </form>
                    </td>
                </tr>
               @endforeach
