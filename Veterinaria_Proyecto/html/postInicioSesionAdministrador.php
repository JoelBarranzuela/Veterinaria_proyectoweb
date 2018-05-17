  <?php
  include_once '../app/ControlSesion.inc.php';
  include_once '../app/config.inc.php';




  ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Iniciar Sesion</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1">	
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/estilos.css">

	</head>
	<body>
		<nav class="navbar navbar-default navbar-static-top">
		 <div class="container">
		 	<div class="navbar-header">
		 		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		 			<span class="sr-only">Este botón despliega la barra de navegacion</span>
		 			<span class="icon-bar"></span>
		 			<span class="icon-bar"></span>
		 			<span class="icon-bar"></span>
		 			<span class="icon-bar"></span>
		 		</button>
		 			<a href="#" class="navbar-brand">
		 			Veterinaria
		 		</a>
		 	</div>

		 	<div id="navbar" class="navbar-collapse collapse"> 
		 		<ul class="nav navbar-nav navbar-right">
		 			<?php
		 				if(ControlSesion::sesion_iniciada()){
		 					?>
		 			<li>
		 				<a href="#">
		 					<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
		 					<?php echo ' ' .  $_SESSION['nombre_cliente'];?>
		 				</a>
		 			</li>		
		 				<li class="dropdown">
		 					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
		 					<span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Panel <span class="caret"></span>
		 					</a>
		 					<ul class="dropdown-menu">
		 						<li>
		 							<a href="#">Citas Reservadas</a>
		 						</li>
		 						<li>
		 							<a href="#">
		 								Reportes
		 							</a>
		 						</li>
		 					</ul>
		 				</li>
		 					<li>
					 		<a href="<?php echo RUTA_LOGOUT;?>">
					 			<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Cerrar Sesión</a>	
					 		</li>
		 					<?php
		 				}else{
		 					?>
		 			<li>
		 		<a href="<?php echo RUTA_LOGIN ?>">Iniciar Sesión</a>	
		 		</li>
		 		<li>
		 		<a href="<?php echo RUTA_REGISTRO ?>">Registro</a>
		 		</li>
		 					<?php
		 				}

		 			 ?>
		 		</ul>
		 	</div>
		 </div>
		</nav>

		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.js"></script>

	</body>
</html>

	<!-- 	<header>
			<div class="contenedor">
				<h1 class="icon-guidedog">Veterinaria</h1>
				<input type="checkbox" id="menu-bar">
				<label class="icon-menu" for="menu-bar"></label>
				<nav class="menu">
					<a href="">Inicio</a>
					<a href="">¿Quiénes somos?</a>
					<a href="">Registrate</a>
					<a href="">Productos</a>
				</nav>
			</div>


		</header>
		<main>
		<section id="banner">
			<img src="../img/felicidad.jpg">
			<div class="contenedor">
			<h2>Se parte de esta hermosa familia</h2>
			<p>¿Te animas ha ser felices con ellos?</p>
			<a href="#">Registrate Aquí</a>
			</div>
		</section>


		</main>
 -->