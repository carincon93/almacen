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

        <div id="page-sidebar" class="background-auth">
            <div>
                <div id="header-logo">

                </div>
                <div id="user">
                    @if(Auth::check())
                    <span>Admin</span>
                    <h5 class="text-capitalize">{{ Auth::user()->name }}</h5>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="logout">
                    Cerrar Sesión
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                @else
                <h4 class="login">Iniciar sesión</h4>
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">Correo Electrónico</label>

                        <div>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password">Contraseña</label>

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
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Login
                        </button>

                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>

                    </div>
                </form>
                @endif
            </div>

            </div>
            <div class="sidebar-content">
                <ul id="sidebar-menu" class="list-unstyled">
                    @if(Auth::check())
                    <li class="header">ADMINISTRAR</li>
                    <li>
                        <a href="{{ url('classroom') }}" class="sidebar-links"><i class="fa fa-fw fa-cog"></i> Gestionar ambientes</a>
                    </li>
                    <li>
                        <a href="{{ url('instructor') }}" class="sidebar-links"><i class="fa fa-fw fa-cog"></i> Gestionar instructores</span></a>
                    </li>
                    @endif
                    <li class="header">ACCIONES</li>
                    <li>
                        <a href="" class="sidebar-links">Prestar ambiente</a>
                    </li>
                    <li class="header"></li>
                    <li>
                        <a href="" class="sidebar-links">Historial de prestamos</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="page-content-wrapper">
            <div id=page-content>
                <div id="page-header">@yield('page-header')</div>
                <div id="page-desc">@yield('page-desc')</div>
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // $('#myModal').on('shown.bs.modal', function() {
            //     $(this).find('[autofocus]').focus();
            //     $('.modal-header').click(function(event) {
            //         $(this).find('[autofocus]').focus();
            //     });
            // });
            $('div[data-target=classrooms]').click(function(event) {
                $('#classrooms').slideToggle(400);
            });
            $('.search-ajax').each(function(index, el) {
                $(window).keydown(function(event) {
                    if (event.keyCode==13) {
                        event.preventDefault();
                        return false;
                    }
                });
            });

            $('#documento').keyup(function(event) {
                $documento = $(this).val();
                $token = $('input[type=hidden]').val();
                $.post('/ajaxsearch', {_token: $token, documento: $documento}, function(data) {
                    $('.table-data').html(data);
                })
            });
            // Ajax Prestamo Ambientes
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
                $novedad = $('form').find('textarea[name=novedad]').val();
                $.post('/modify_loan/'+$borrowed_at, {_token: $token, delivered_at: $delivered_at, novedad: $novedad}, function(data, textStatus, xhr) {
                    /*optional stuff to do after success */
                });
            });

            $('input[name=nombre_ambiente]').keyup(function(event) {
                $token = $('form').find('input[name=_token]').val();
                $nombre_ambiente = $('form').find('input[type=search]').val();
                $.post('/classroomajax', {_token: $token, nombre_ambiente: $nombre_ambiente}, function(data, textStatus, xhr) {
                    $('.content-ajax').html(data);
                });
            });

            // Eliminar Instructor
            $('form').on('click','.btn-delete-instructor', function(event){
                event.preventDefault();
                if (confirm('Realmente desea eliminar este instructor?')) {
                    $(this).parent().submit();
                }
            });
            // Eliminar Ambiente
            $('form').on('click','.btn-delete-classroom', function(event){
                event.preventDefault();
                if (confirm('Realmente desea eliminar este ambiente?')) {
                    $(this).parent().submit();
                }
            });

            //search classroom
            $('#nombreambiente').keyup(function() {
                $nombreambiente=$(this).val();
                $.get('/ajaxsearch', {nombre_ambiente: $nombreambiente}, function(data) {
                    $('.tbody').html(data);
                });
            });
            // search instructor
            $('#nombre').keyup(function() {
                $nombre=$(this).val();
                $.get('/ajaxsearch2', {nombre: $nombre}, function(data) {
                    $('.tbody').html(data);
                });
            });
        });
    </script>
</body>
</html>
