@foreach($data as $d)
<div class="col-md-6">
    <div class="panel">
        <div class="panel-body">
            @if($d->estado == 'reparacion')
            <a href="#" class="cr cr-repair classroom"><i class="fa fa-fw fa-exclamation-triangle"></i> {{ $d->nombre_ambiente }} <span>(En reparación)</span></a>
            @elseif($d->estado == 'inactivo')
            <a href="#" class="cr cr-inactive classroom"><i class="fa fa-fw fa-ban"></i> {{ $d->nombre_ambiente }} <span>(Inactivo)</span></a>
            @elseif($d->disponibilidad == 'no disponible')
            <a href="{{ url('classroom_loan2/'.$d->id) }}" class="classroom"><i class="fa fa-fw fa-circle"></i>{{ $d->nombre_ambiente }} <span class="cr-instructor">{{ $d->instructor->nombre.' '.$d->instructor->apellidos }}</span></a>
            @else
            <a href="{{ url('classroom_loan/'.$d->id) }}" class="classroom">{{ $d->nombre_ambiente }}</a>
            @endif
        </div>
    </div>
</div>
@endforeach
