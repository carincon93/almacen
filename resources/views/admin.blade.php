@extends('layouts.app')

@section('content')
    <div class="card floor-plan">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 602 368.1">
                <title>Recurso 8</title>
                <g class="text-capitalize">
                    @if($dataClassr->disponibilidad == 'no disponible')
                    <rect x="284.39" y="1" width="316.61" height="139.66" style="fill: #ffedce;stroke: #111;stroke-miterlimit: 10;stroke-width: 2px"/>
                    <text transform="translate(397.46 72.95)" style="font-size: 18px;">{{ $dataClassr->nombre_ambiente }} <tspan>{{ $dataClassr->instructor->nombre }}</tspan></text>
                    @else
                    <text transform="translate(397.46 72.95)" style="font-size: 18px;">{{ $dataClassr->nombre_ambiente }}{{ $dataClassr->instructor->nombre }}</text>
                    <!-- <text transform="translate(397.46 72.95)" style="font-size: 18px;">{{ $dataClassr->nombre_ambiente }}</text> -->
                    <rect x="284.39" y="1" width="316.61" height="139.66" style="fill: none;stroke: #111;stroke-miterlimit: 10;stroke-width: 2px"/>
                    @endif
                    <rect x="284.39" y="238.97" width="302.3" height="128.14" style="fill: none;stroke: #111;stroke-miterlimit: 10;stroke-width: 2px"/>
                    <rect x="251.85" y="1" width="32.54" height="91.53" style="fill: none;stroke: #111;stroke-miterlimit: 10;stroke-width: 2px"/>
                    <rect x="251.85" y="275.58" width="32.54" height="91.53" style="fill: none;stroke: #111;stroke-miterlimit: 10;stroke-width: 2px"/>
                    <rect x="1" y="1" width="250.85" height="91.53" style="fill: none;stroke: #111;stroke-miterlimit: 10;stroke-width: 2px"/>
                    <rect x="1" y="275.58" width="250.85" height="91.53" style="fill: none;stroke: #111;stroke-miterlimit: 10;stroke-width: 2px"/>
                    <rect x="167.5" y="182.69" width="108.08" height="69.15" style="fill: none;stroke: #111;stroke-miterlimit: 10;stroke-width: 2px"/>
                    <text transform="translate(397.46 308.95)" style="font-size: 18px;">Almacén</text>
                    <text transform="translate(177.46 222.95)" style="font-size: 18x;">Enfermería</text>
                </g>
            </svg>

        </div>
    </div>
@endsection
