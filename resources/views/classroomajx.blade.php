@foreach($query->chunk(3) as $chunk)
<div class="row">
    @foreach($chunk as $clr)
    <div class="col-md-4">
        @if($clr->estado == 'inactivo')
        <div>
            <div class="classroom-card clr-inactive card">
                <h5 class="text-capitalize">{{ $clr->nombre_ambiente }}</h5>
                <hr>
                <div>
                    <p>El ambiente está inactivo</p>
                </div>
            </div>
        </div>
        @elseif($clr->estado == 'en reparacion')
        <div>
            <div class="classroom-card clr-repair card text-capitalize">
                <h5 class="text-capitalize">{{ $clr->nombre_ambiente }}</h5>
                <hr class="hr-repair">
                <div>
                    <p>El ambiente se encuentra en reparación</p>
                </div>
            </div>
        </div>
        @elseif($clr->disponibilidad == 'no disponible')
        <div>
            <div class="classroom-card clr-borrowed card text-capitalize" data-id="{{ $clr->id }}" data-borrowed="{{ $clr->borrowed_at }}">
                <h5 class="text-capitalize">{{ $clr->nombre_ambiente }}</h5>
                <hr>
                <div><i class="fa fa-fw fa-circle"></i>{{ $clr->instructor->nombre.' '.$clr->instructor->apellidos }}</div>
                <span class="badge borrowed-info">{{ $clr->borrowed_at }}</span>
            </div>
        </div>
        @else
        <div>
            <div class="classroom-card clr-empty card text-capitalize" data-id="{{ $clr->id }}">
                <h5 class="text-capitalize">{{ $clr->nombre_ambiente }}</h5>
                <hr>
            </div>
        </div>
        @endif
    </div>
    @endforeach
</div>
@endforeach
