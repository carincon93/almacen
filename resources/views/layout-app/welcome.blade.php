<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<style>
		img{
			height:25rem;
		}
	</style>
</head>
<body>
	@include('layout-app.navbar')
	<div class="container">
		@yield('content')
	</div>
	
	<script src="{{asset('js/jquery-3.1.1.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>