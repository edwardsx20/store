<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SMStoreV3</title>

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/toaster.css" rel="stylesheet">

	<link href="css/custom.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>

	@yield('header')

</head>
<body>
	@section('nav')

		<header class="header">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<!-- ::::::::::::::: -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">
						<img alt="Brand" src="images/sm.png?v=4124">
					</a>
				</div>
				<!-- ::::::::::::::: -->
				<div id="navbar" class="navbar-collapse" uib-collapse="isCollapsed">
					<ul class="nav navbar-nav navbar-right">
						<div class="container-fluid">
							<form id="loginForm" class="navbar-form form-inline navbar-right">
								<div class="form-group">
									<input class="form-control" placeholder="RUT" type="text" required />
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Clave" type="password" required />
								</div>
								<button type="submit" class="btn btn-primary">Iniciar sesión</button>
							</form>

							<a href="#/signup"><button class="btn navbar-btn btn-default navbar-right">Regístrate</button></a>
						</div>

						<span>
							<p class="navbar-text">
								Hola, <strong>@{{name}}</strong>!
								<a href="">| Cerrar sesión</a>
								<i class="fa fa-lock"></i>

								<a href="#/cart" ></span> | Ir al carro</a>
								<i class="ace-icon fa fa-shopping-cart"></i>
								(@{{cart.quantity}})
							</p>
						</span>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	@show

	@yield('content')
	
	<footer>
		

	@yield('footer')
	</footer>
</body>
</html>