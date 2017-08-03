@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Dashboard</div>

            <div class="panel-body">
                <ul class="list-group">

                    <li class="list-group-item">
                        <span class="badge">{{ $clrs }}</span>
                        <a href="{{ url('classroom') }}">Ambientes</a>
                    </li>
                    <li class="list-group-item">
                        <span class="badge">{{ $cins }}</span>
                        <a href="{{ url('instructor') }}">Instructores</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
