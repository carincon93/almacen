@foreach($query as $ins)
<tr>
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
        <form action="{{ url('/admin/instructor/'.$ins->id) }}" method="POST" style="display:inline-block;" class="form-delete btn">
            {{ method_field('delete') }}
            {!! csrf_field()  !!}
            <button class="btn-delete-instructor">
                <i class="fa fa-fw fa-trash"></i>
            </button>
        </form>
    </td>
</tr>
@endforeach
