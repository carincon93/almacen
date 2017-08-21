 @foreach($query->chunk(3) as $chunk)
        <div class="row">
            @foreach($chunk as $clr)
            <div class="col-md-4">
                @if($clr->estado == 'inactivo')
                <div>
                    <div class="classroom-card card clr-inactive">
                        <div class="clr-img">
                            <img src="{{ asset($clr->imagen) }}" alt="" class="img-classroom img-clrinactive img-responsive">
                        </div>
                        <div class="clr-desc">
                            <h5 class="" data-nombreClr="{{ $clr->nombre_ambiente }}">{{ $clr->nombre_ambiente }}</h5>
                            <hr>
                            <p>El ambiente está inactivo.</p>
                        </div>
                    </div>
                </div>
                @elseif($clr->estado == 'en reparacion')
                <div>
                    <div class="classroom-card card clr-repair">
                        <div class="clr-img">
                            <img src="{{ asset($clr->imagen) }}" alt="" class="img-classroom img-clrinactive img-responsive">
                        </div>
                        <div class="clr-desc">
                            <span class="circle"></span>
                            <h5 class="">{{ $clr->nombre_ambiente }}</h5>
                            <hr class="hr-repair">
                            <p>El ambiente se encuentra en reparación</p>
                        </div>
                    </div>
                </div>
                @elseif($clr->disponibilidad == 'no disponible')
                <div>
                    <div class="classroom-card card clr-entregar" data-idclr="{{ $clr->id }}" data-entregar="{{ $clr->prestado_en }}" data-idIns="{{ $clr->instructor->id }}">
                        <div class="clr-img">
                            <img src="{{ asset($clr->imagen) }}" alt="" class="img-classroom img-responsive">
                            <div class="info-clr">Ambiente en uso <span class="pull-right">{{ $clr->prestado_en }}</span></div>
                        </div>
                        <div class="clr-desc">
                            <h5 class="" data-nombreClr="{{ $clr->nombre_ambiente }}">{{ $clr->nombre_ambiente }}</h5>
                            <hr>
                            <div class="text-capitalize">{{ $clr->instructor->nombre.' '.$clr->instructor->apellidos }}</div>
                            <span class="badge fecha-prestamo"></span>
                        </div>
                    </div>
                </div>
                @else
                <div>
                    <div class="classroom-card card clr-disponible" data-idclr="{{ $clr->id }}">
                        <div class="clr-img">
                            <img src="{{ asset($clr->imagen) }}" alt="" class="img-classroom img-responsive">
                        </div>
                        <div class="clr-desc">
                            <span class="circle"></span>
                            <h5 class="" data-nombreClr="{{ $clr->nombre_ambiente }}">{{ $clr->nombre_ambiente }}</h5>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            @endforeach
        </div>
        @endforeach