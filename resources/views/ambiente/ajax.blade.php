@foreach ($articles as $var)
	<tr>
		<td>{{ $var->id }}</td>
		<td>
			{{ $var->name }}
		</td>
		<td>
			<a class="btn btn-default" href="{{ url('article/'.$var->id) }}">
				<i class="glyphicon glyphicon-search"></i>
			</a>
			<a class="btn btn-default" href="{{ url('article/'.$var->id.'/edit') }}">
				<i class="glyphicon glyphicon-pencil"></i>
			</a>
			<form action="{{ url('article/'.$var->id) }}" method="post" style="display:inline-block;">
				{{ method_field('delete') }}
				{!! csrf_field()  !!}
				<button type="button" class="btn btn-danger btn-delete">
					<i class="glyphicon glyphicon-trash"></i>
				</button>
			</form>
							{{-- <a class="btn btn-danger" href="{{ url('') }}">
								<i class="glyphicon glyphicon-trash"></i>
							</a> --}}
		</td>
	</tr>
@endforeach