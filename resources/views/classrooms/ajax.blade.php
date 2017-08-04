@foreach($query as $var)
						<tr>
							<td>{{ $var->id }}</td>
							<td class="text-capitalize">{{ $var->nombre_ambiente }}</td>
							<td>
								<a class="btn btn-default" href="{{ url('classroom/'.$var->id) }}">
									<i class="fa fa-fw fa-search"></i>
									Consultar
								</a>
								<a class="btn btn-default" href="{{ url('classroom/'.$var->id.'/edit') }}">
									<i class="fa fa-fw fa-pencil"></i>
									Editar
								</a>
								<form action="{{ url('classroom/'.$var->id) }}" method="post" style="display:inline-block;">
									{{ method_field('delete') }}
									{!! csrf_field()  !!}
									<button type="button" class="btn btn-danger btn-delete-classroom">
										<i class="fa fa-fw fa-trash"></i>
										Eliminar
									</button>
								</form>
							</td>
						</tr>
						@endforeach