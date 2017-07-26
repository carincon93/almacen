@extends('layout-app.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <ul class="list-group">

                        <li class="list-group-item">
                            <span class="badge">{{ $cins }}</span>
                            <a href="{{ url('instructor') }}">Instructores</a>
                        </li>
                        <li class="list-group-item">
                            <span class="badge">{{ $cams }}</span>
                            <a href="{{ url('ambiente') }}">Ambientes</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
