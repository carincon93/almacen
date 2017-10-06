@foreach($query->chunk(3) as $chunk)
    <div class="row">
        @foreach($chunk as $clr)
            <div class="col-md-4">
            @if($clr->disponibilidad == 'disponible')
                <div>
                    <div class="classroom-card card amb-disponible" data-id-ambiente="{{ $clr->id }}" data-toggle="modal" data-target="#modal_solicitar_prestamo" id="ffd">
                        <div class="clr-img">
                            <img src="{{ asset($clr->imagen) }}" alt="" class="{{ $clr->imagen == '/images/sin_foto.png' ? 'center-block sin-foto' : ''}} img-classroom img-responsive">
                        </div>
                        <div class="clr-desc">
                            <span class="circle"></span>
                            <div class="desc-1">
                                <h5 class="" data-nombre-ambiente="{{ $clr->nombre_ambiente }}">{{ $clr->nombre_ambiente }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            </div>
        @endforeach
    </div>
@endforeach
