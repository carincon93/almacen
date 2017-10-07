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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-datepicker.standalone.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet">

</head>
<body>
    @include('layouts.modal')
    @include('layouts.modal_historial')
    @if (Auth::check())
    <aside id="sidebar">
        <div id="sidebar-logo">
            <h4 class="text-center">
                <a href="{{ url('/admin') }}">ALMACÉN CPIC</a>
            </h4>
        </div>
        <div id="sidebar-content">
            <ul class="sidebar-menu list-unstyled">
                <li>Administración</li>
                <li>
                    <a href="{{ url('/admin/dashboard') }}"><i class="fa fa-fw fa-cog"></i>Dashboard</a>
                </li>
                <li>Administración</li>
                <li>
                    <a href="{{ url('/admin/collaborator') }}"><i class="fa fa-fw fa-cog"></i>Administradores</a>
                </li>
                <li>
                    <a href="{{ url('/admin/instructor') }}"><i class="fa fa-fw fa-cog"></i>Instructores</a>
                </li>
                <li>
                    <a href="{{ url('/admin/classroom') }}"><i class="fa fa-fw fa-cog"></i>Ambientes</a>
                </li>
                <li>
                    <a href="{{ url('/admin/class_group') }}"><i class="fa fa-fw fa-cog"></i>Fichas</a>
                </li>
                <li>Acciones</li>
                <li>
                    <a href="{{ url('/') }}"><i class="fa fa-fw fa-key"></i>Prestar ambiente</a>
                </li>
                <li>
                    <a href="{{ url('/admin/history_record') }}"><i class="fa fa-fw fa-line-chart"></i>Historial de préstamos</a>
                </li>
                <li>
                    <a href="{{ url('/admin/update_system') }}"><i class="fa fa-fw fa-circle-o-notch"></i>Actualizar sistema</a>
                </li>
            </ul>
        </div>
    </aside>
    @endif
    <main id="app">
        <div class="{{ Auth::check() ? 'app-check' : ''}}">
            <nav class="navbar navbar-default navbar-fixed-top {{ Auth::check() ? 'mleft' : '' }}">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            @if(Auth::check())
                            <li><span id="userImage" class="text-uppercase"></span></li>
                            <li class="dropdown">
                                <a id="nameUser" href="#" class="dropdown-toggle text-capitalize user-name" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('admin/password')}}">Cambiar mi contraseña</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();" class="">
                                            <i class="fa fa-fw fa-sign-out"></i>
                                            Cerrar Sesión
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
        <div class="main-content">

            <div class="row no-gutter">
                <div class="{{ Auth::guest() ? 'col-md-9' : 'col-md-12' }} big-content">
                    <div class="big-content-desc clearfix">
                        @yield('big-content-desc')
                    </div>
                    @yield('content')
                </div>
                <div class="{{ Auth::guest() ? 'col-md-3 right-content' : ''}}">
                    <div>
                        @yield('right-content')

                        @if(!Auth::check())
                        <div class="card-form">
                            <form method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="control-label">Correo electrónico</label>

                                    <div>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            {{ $errors->first('email') }}
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="control-label">Contraseña</label>

                                    <div>
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuerda mi cuenta
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div>
                                        <button type="submit" id="login" class="btn btn-primary">
                                            Iniciar sesión
                                        </button>

                                        <a class="btn-link pwd-req" href="{{ route('password.request') }}">
                                            ¿Olvidaste tu contraseña?
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

        </div>

        </div>
    </main>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.es.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $(document).ready(function() {

            var id_anchor = location.hash;
            $(id_anchor).css('border', '1px solid rgb(232, 40, 111)').append('<div class="card clr-msg"><div class="caret"></div>Por favor entrega este ambiente</div>');

            $('.select').select2();
            $('#myTable').DataTable();
            $('.owl-carousel').owlCarousel({
                loop:true,
                // autoplay:true,
                margin:10,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:true
                    },
                    1000:{
                        items:1,
                        nav:false,
                        loop:false
                    }
                }
            });
            $('.datapickerr').datepicker({
                    format: "yyyy/mm/dd",
                    language: "es",
                    autoclose: true
                });
        });
    </script>
</body>
</html>
