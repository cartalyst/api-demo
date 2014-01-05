<!DOCTYPE html>
<html>
	<head>
		<title>API Demo</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>

		@include('partials.notifications')

		<div class="container">
			@yield('content')
		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
	</body>
</html>
