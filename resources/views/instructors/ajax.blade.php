@foreach($query as $var)
						<tr>
							<td>{{ $var->id }}</td>
							<td class="text-capitalize">{{ $var->nombre }}</td>
							<td class="text-capitalize">{{ $var->apellidos }}</td>
							<td>
								<a class="btn btn-default" href="{{ url('instructor/'.$var->id) }}">
									<i class="fa fa-fw fa-search"></i>
									Consultar
								</a>
								<a class="btn btn-default" href="{{ url('instructor/'.$var->id.'/edit') }}">
									<i class="fa fa-fw fa-pencil"></i>
									Editar
								</a>
								<form action="{{ url('instructor/'.$var->id) }}" method="post" style="display:inline-block;">
									{{ method_field('delete') }}
									{!! csrf_field()  !!}
									<button type="button" class="btn btn-danger btn-delete-instructor">
										<i class="fa fa-fw fa-trash"></i>
										Eliminar
									</button>
								</form>
							</td>
						</tr>
						@endforeach