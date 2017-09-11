<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('title')</title>
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/sty.css">

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<!-- date-time -->
	<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.datetimepicker.full.js"></script>
	<script src="js/script.js"></script>
	<!-- icon -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	
	<style>
		.bgbody  {
		      background: url("pic/bghome.jpg") no-repeat center center fixed; 
			  -webkit-background-size: cover;
			  -moz-background-size: cover;
			  -o-background-size: cover;
			  background-size: cover;
		}
	</style>

</head>
<body class="bgbody">

	<div class="container">
		<div class="row">
		<div class="col-md-12 col-md-offset-0">
			<div class="@yield('bgmenu')">

				<nav class="navbar navbar-toggleable-md navbar-inverse">
					<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<ul class="navbar-nav mr-auto">
						<a class="navbar-brand" href="/home">Navbar</a>
					</ul>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item @yield('home')">
								<a class="nav-link" href="/home">Home</a>
							</li>
							<li class="nav-item @yield('entertainment')">
								<a class="nav-link" href="/entertainment">entertainment</a>
							</li>
							<li class="nav-item @yield('activity')">
								<a class="nav-link" href="/activity">activity</a>
							</li>
							<li class="nav-item @yield('shuttle')">
								<a class="nav-link" href="/shuttle">shuttle</a>
							</li>
							<li class="nav-item @yield('Disabled')">
								<a class="nav-link disabled" href="#">Disabled</a>
							</li>
						</ul>
						<!-- <form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="text" placeholder="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
						</form> -->
						<div class="form-inline my-2 my-lg-0">
							<ul class="navbar-nav mr-auto">
									<li class="nav-item @yield('Signin')">
										<a class="navbar-brand" href="Sign In">Sign In</a>
									</li>
									<li class="nav-item @yield('Register')">
										<a class="navbar-brand" href="Register">Register</a>
									</li>
							</ul>
						</div>
					</div>
				</nav>

			</div>
		</div>
		</div>
	</div>

	<div class="container">

		@yield('content')
	
	</div>
	
</body>
<script>
	$('#datetimepicker_dark').datetimepicker({
		// theme:'dark',
		step:10
	});
	$('#datetimepicker_dark1').datetimepicker({
		// theme:'dark',
		step:10
	});

	$(document).ready(function () {
        $("#kv-explorer").fileinput({
            'theme': 'explorer',
            'uploadUrl': '#',
            overwriteInitial: false,
            initialPreviewAsData: true
        });
    });
</script>
</html>