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
            <div id="header-logo">

            </div>
            <div class="sidebar-content">
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
                    <button type="button" class="login" data-toggle="modal" data-target="#myModal">Iniciar sesión</button>
                    @endif
                </div>
                <ul id="sidebar-menu" class="list-unstyled">
                    @if(Auth::check())
                    <li class="header">ADMINISTRAR</li>
                    <li>
                        <a href="{{ url('classroom') }}" class="sidebar-links"><i class="fa fa-fw fa-cog"></i> Gestionar ambientes <span class="badge">{{ $clrs }}</span></a>
                    </li>
                    <li>
                        <a href="{{ url('instructor') }}" class="sidebar-links"><i class="fa fa-fw fa-cog"></i> Gestionar instructores <span class="badge">{{ $cins }}</span></a>
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
            $('.box2').click(function(event) {
                $('body').addClass('side-left');
            });
            // $('#myModal').on('shown.bs.modal', function() {
            //     $(this).find('[autofocus]').focus();
            //     $('.modal-header').click(function(event) {
            //         $(this).find('[autofocus]').focus();
            //     });
            // });
            $('div[data-target=classrooms]').click(function(event) {
                $('#classrooms').slideToggle(400);
            });
            // Ajax Prestamo Ambientes
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
                $novedad = $('form').find('textarea[name=novedad]').val();
                $.post('/modify_loan/'+$borrowed_at, {_token: $token, delivered_at: $delivered_at, novedad: $novedad}, function(data, textStatus, xhr) {
                    /*optional stuff to do after success */
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

            // Ajax Tablas
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
