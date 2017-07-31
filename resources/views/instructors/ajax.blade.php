<table class="table table-bordered">
    <thead></thead>
    <tbody>
        @foreach($data as $ins)
        	<tr>
        		<td>
        			{{ $ins->id}}
        		</td>
        		<td class="text-capitalize">
        			{{ $ins->nombre.' '.$ins->apellidos }}
        		</td>
                <td>
                    <form action="{{ url('classroom/store') }}" method="POST">
                        <select name="" id="">
                            <option value="">Seleccione un ambiente</option>
                            @foreach($dataClassroom as $clas)
                            <option value="{{ $clas->id }}">{{ $clas->nombre_ambiente }}</option>
                            @endforeach
                        </select>
                    </form>
                </td>
        	</tr>
        @endforeach
    </tbody>
</table>
