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
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}"><span class="fa fa-fw fa-sign-in"></span>Iniciar Sesión</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
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

        });
    </script>
</body>
</html>
