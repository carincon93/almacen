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
							<a href="{{ url('ambiente') }}">Ambientes</a>
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
									<a href="{{ route('logout') }}"
									onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
									<i class="glyphicon glyphicon-remove"></i>
									Cerrar sesion
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
						</ul>
					</li>
				@else
					
						<li><a href="{{ url('/login') }}"><i class="glyphicon glyphicon-user"></i> Iniciar sesion</a></li>
					
				
				@endif
				</ul>
			</div>
		</div>
	</nav>