<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
	@include('layout-app.navbar')
	
	<div class="container">
		@yield('content')
	</div>
	
	<script src="{{asset('js/jquery-3.1.1.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script>
		$(document).ready(function() {
			$('form').on('click','.btn-delete', function(event){
				event.preventDefault();
				if (confirm('Realmente desea eliminar esta categoria?')) {
					$(this).parent().submit();
				}
			});

			// $(window).keydown(function(event) {
			// 	if (event.keyCode==13) {
			// 		event.preventDefault();
			// 		return false;
			// 	}
			// });
			// $('#name').keyup(function(event) {

			// 	$name=$(this).val();
			// 	$token=$('input[type=hidden]').val();

			// 	$.post('/search', {_token: $token, name: $name}, function(data) {
			// 		$('.tbody').html(data);


			// 	});
			// });
		});
	</script>
</body>
</html>