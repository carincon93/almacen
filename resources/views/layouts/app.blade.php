<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    @if (Auth::guest())
                    <a href="{{ url('/') }}" class="navbar-brand">ALMACEN</a>
                    @else
                    <a href="{{ url('home') }}" class="navbar-brand">ALMACEN</a>
                    @endif

                </div>
                <div class="collapse navbar-collapse">
                    @if (Auth::check())
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="{{ url('instructor') }}">Instructores</a>
                        </li>
                        <li>
                            <a href="{{ url('classroom') }}">Ambientes</a>
                        </li>
                    </ul>
                    @endif
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::check())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class=""></i>Cerrar sesion</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @else
                        <li><a href="{{ url('/login') }}"><i class="fa fa-fw fa-sign-in"></i>Iniciar sesion</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

    @yield('content')
    </div>

<!-- Scripts -->
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#myModal').on('shown.bs.modal', function() {
        $(this).find('[autofocus]').focus();
        $('.modal-header').click(function(event) {
            $(this).find('[autofocus]').focus();
        });
    });
    $('#documento').keyup(function(event) {
        $documento = $(this).val();
        $token = $('input[type=hidden]').val();
        $.post('/ajaxsearch', {_token: $token, documento: $documento}, function(data) {
            $('.table-data').html(data);
        })
    });
    $('.save_entrie').click(function(event) {
        $token = $('form').find('input[name=_token]').val();
        $instructor_id = $('form').find('select[name=instructor_id]').val();
        $classroom_id = $('form').find('#id').val();
        $borrowed_at = $('form').find('input[name=borrowed_at]').val();
        $.post('/loan', {_token: $token, instructor_id: $instructor_id, classroom_id: $classroom_id, borrowed_at: $borrowed_at}, function(data, textStatus, xhr) {
            /*optional stuff to do after success */
        });
    });
    $('.modify_entrie').click(function(event) {
        $token = $('form').find('input[name=_token]').val();
        $borrowed_at = $('form').find('.borrowed').val();
        $delivered_at = $('form').find('input[name=delivered_at]').val();
        // alert($delivered_at);
        $.post('/modify_loan/'+$borrowed_at, {_token: $token, delivered_at: $delivered_at}, function(data, textStatus, xhr) {
            /*optional stuff to do after success */
        });
    });
    //eliminar instructor
    $('form').on('click','.btn-delete-instructor', function(event){
        event.preventDefault();
        if (confirm('Realmente desea eliminar este instructor?')) {
            $(this).parent().submit();
        }
    });
    $(window).keydown(function(event) {
        if (event.keyCode==13) {
            event.preventDefault();
            return false;
        }
    });
    $('#name').keyup(function(event) {
        $name=$(this).val();
        $token=$('input[type=hidden]').val();
        $.post('/search', {_token: $token, name: $name}, function(data) {
            $('.tbody').html(data);
        });
    });
    //elimar ambiente
    $('form').on('click','.btn-delete-classroom', function(event){
        event.preventDefault();
        if (confirm('Realmente desea eliminar este ambiente?')) {
            $(this).parent().submit();
        }
    });
    $(window).keydown(function(event) {
        if (event.keyCode==13) {
            event.preventDefault();
            return false;
        }
    });
    $('#name').keyup(function(event) {
        $name=$(this).val();
        $token=$('input[type=hidden]').val();
        $.post('/search', {_token: $token, name: $name}, function(data) {
            $('.tbody').html(data);
        });
    });
});
</script>
</body>
</html>
