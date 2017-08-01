@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="box box1">
            <a href="{{ url('classrooms') }}">
                <header></header>
                <div class="box-body">
                    <h4><strong>Prestar ambiente</strong></h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio molestiae incidunt cum eius
                        voluptatem architecto consequuntur ea soluta ut velit. Harum, tenetur recusandae nam voluptatibus.
                    </p>
                </div>
            </a>
        </div>

        <div class="box box2">
            <header></header>
            <div class="box-body">
                <h4><strong>Historial de prestamos</strong></h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio molestiae incidunt cum eius
                    voluptatem architecto consequuntur ea soluta ut velit. Harum, tenetur recusandae nam voluptatibus.
                </p>
            </div>
        </div>
    </div>
@endsection
