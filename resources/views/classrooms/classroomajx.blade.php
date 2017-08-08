@foreach($query as $clr)
<tr>
    <td>{{ $clr->nombre_ambiente }}</td>
    <td>
        <a class="btn" href="{{ url('/admin/classroom/'.$clr->id) }}">
            <i class="fa fa-fw fa-search"></i>
        </a>
        <a class="btn" href="{{ url('/admin/classroom/'.$clr->id.'/edit') }}">
            <i class="fa fa-fw fa-pencil"></i>
        </a>
        <form action="{{ url('/admin/classroom/'.$clr->id) }}" method="POST" style="display: inline-block;" class="form-delete btn">
            {{ method_field('delete') }}
            {!! csrf_field()  !!}
            <button type="button" class="btn-delete-classroom">
                <i class="fa fa-fw fa-trash"></i>
            </button>
        </form>
    </td>
</tr>
@endforeach
