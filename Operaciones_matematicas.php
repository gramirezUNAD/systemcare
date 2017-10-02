<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta content="Gustavo Ramirez Aristizabal" name="author">
	<meta content="Sitio Web Practica Hangout" name="description">
	<meta content="UNAD, diseño web, html" name="keywords">
	<title>O.V.I Administracion de Redes</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
</head>
<body>
	<div id="contenedor">
		<header>
			<img src="img/banner2.jpg" alt="Header">
		</header>

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link" href="index.html">Administrador</a></li>
					<li class="nav-item"><a class="nav-link" href="Ingreso_de_hojas_de_vida.html">Ingreso de hojas de vida</a></li>
					<li class="nav-item"><a class="nav-link" href="Consulta_de_hojas_de_vida.html">Consulta de hojas de vida</a></li>
					<li class="nav-item"><a class="nav-link" href="Actualizacion_de_hojas_de_vida.html">Actualización de hojas de vida</a></li>
					<li class="nav-item"><a class="nav-link" href="Reportes_especiales.html">Reportes especiales</a></li>
					<li class="nav-item active"><a class="nav-link" href="Operaciones_matematicas.php">Operaciones Matematicas</a></li>
				</ul>
			</div>
		</nav>

		<section class="section">
			<article class="article">
				<h2>Operaciones Matematicas</h2>
				<form action="calculator.php" method="post">
					<label style="font-weight: bold;">Número 1</label>
					<input type="number" class="form-control" style="width:40%;" name="numero1">
					<label style="font-weight: bold;">Número 2</label>
					<input type="number" class="form-control" style="width:40%;" name="numero2">
					<br>
					<select name="opcion" class="form-control" style="width:40%;">
						<option value="suma">Suma</option>
						<option value="resta">Resta</option>
						<option value="multiplicacion">Multiplicación</option>
						<option value="division">División</option>
					</select>
					<br>
					<br>
					<input type="submit" class="btn btn-primary" value="Calcular"/>
					<!--<button type="button" class="btn btn-primary">Calcular</button>-->
					<br>
				</form>				
			</article>
		</section>		

		<footer>
			<h4 style="margin: 7px; width: 80%; color:#FFFFFF;">Desarrollado por el grupo: 301127_15</h4>
			<h4 style="margin: 7px; width: 80%; color:#FFFFFF;">Universidad Nacional Abierta y a Distancia UNAD - 2017</h4>
		</footer>
		
	</div>
	
</body>
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/prefixfree.js"></script>
</html>