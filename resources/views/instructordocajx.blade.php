
@foreach($query as $ins)
	<option value="{{$ins->id}}">{{ $ins->nombre.' '.$ins->apellidos }} </option>
@endforeach

