<!DOCTYPE html>
<html>
<head>
	<title>inmobiliaria las palmeras</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	@yield('contenido2')
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<a class="navbar-brand" href="#">INMOBILIARIA LAS PALMERAS</a>
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item active">
					<a class="nav-link" href="/">home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="http://localhost:8000/usuarios/create">Crear cliente<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="http://localhost:8000/usuarios">Ver clientes</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="http://localhost:8000/ubicacion">Ver ubicacion</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container">
		@yield('contenido')
	</div>

</body>
</html>