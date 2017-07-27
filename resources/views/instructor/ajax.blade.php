@foreach ($instructores as $var)
	<tr>
		<td>{{ $var->id }}</td>
		<td>
			{{ $var->nombre }}
		</td>
		<td>
			<a class="btn btn-default" href="{{ url('instructor/'.$var->id) }}">
				consultar
			</a>
			<a class="btn btn-default" href="{{ url('instructor/'.$var->id.'/edit') }}">
				editar
			</a>
			<form action="{{ url('instructor/'.$var->id) }}" method="post" style="display:inline-block;">
				{{ method_field('delete') }}
				{!! csrf_field()  !!}
				<button type="button" class="btn btn-danger btn-delete">
					eliminar
				</button>
			</form>
		</td>
	</tr>
@endforeach