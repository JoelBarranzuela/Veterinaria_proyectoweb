<?php
include_once '../app/Conexion.inc.php';
include_once '../app/RepositarioClientes.inc.php';
  include_once '../app/config.inc.php';
  include_once '../app/Conexion.inc.php';
  include_once '../app/redireccion.inc.php';


  /*
Conexion :: abrir_conexion();
$total_cliente = RepositarioClientes :: obtener_numero_usuarios(Conexion::obtener_conexion());
echo count($total_cliente);
Conexion :: cerrar_conexion();
*/
?>




<!DOCTYPE html>
<html lang="es">
<head>
	<title>Veterinaria</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximium-scale=1, minimum-scale=1">	
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
		 		<a href="<?php echo RUTA_VETERINARIA ?>" class="navbar-brand">
		 			Veterinaria
		 		</a>
		 	</div>
		 	<div id="navbar" class="navbar-collapse collapse">
		 		<ul class="nav navbar-nav">
		 		<li>
		 		<a href="<?php echo RUTA_INICIO ?>">Inicio<span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
		 		</li>
		 		<li>
		 		<a href="<?php echo RUTA_QUIENESSOMOS ?>">¿Quiénes somos?</a>
		 		</li>
		 		<li>
		 		<a href="<?php echo RUTA_INFORMACION ?>">Información</a>	
		 		</li>	
		 		</ul>
		 		<ul class="nav navbar-nav navbar-right">
		 		<li>
		 		<a href="<?php echo RUTA_LOGIN ?>">Iniciar Sesión</a>	
		 		</li>
		 		<li>
		 		<a href="<?php echo RUTA_REGISTRO ?>">Registro</a>
		 		</li>
		 		<li>
		 		<a href="redessociales.php">Redes Sociales</a>		
		 		</li>	
		 		</ul>
		 	</div>

		 </div>
		</nav>


		<div class="container">
			<div class="jumbotron">
			<img src="../img/alegria.jpg" class="img-responsive" alt="Responsive image" width="95%" >
			<h2 align="center">Se parte de esta hermosa familia</h2>
			</div>
		</div>
		<div class="container">
			<div class="row">
					<div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h3 align="center">Datos y Tips</h3>
												<div class="panel-body">
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
														proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
													</p>
												</div>	
											</div>
										</div>	
									</div>
								</div>
							</div>
			
					<div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h3 align="center">Lista Productos</h3>
												<div class="panel-body">
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
														proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
													</p>
												</div>	
											</div>
										</div>	
									</div>
								</div>
						</div>
				</div>
		</div>

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