<?php
include_once '../app/Conexion.inc.php';
include_once '../app/Cliente.inc.php';
include_once '../app/RepositarioClientes.inc.php';
include_once '../app/ValidarRegistro.inc.php';
include_once '../app/redireccion.inc.php';
include_once '../app/config.inc.php';



if(isset($_POST['registrar'])){
	Conexion :: abrir_conexion();


	$validador = new ValidarRegistro($_POST['nombreCliente'], $_POST['ApePaterno'], $_POST['ApeMaterno'], $_POST['Direccion'], $_POST['dni'], $_POST['telefono'], $_POST['clave1'],$_POST['clave2'], Conexion::obtener_conexion()); 




	if($validador -> registro_valido()) {

		$cliente = new Cliente('',$validador->obtener_nombre(), $validador->obtener_apePaterno(), $validador->obtener_apeMaterno(), $_POST['Direccion'], $_POST['dni'],
		 password_hash($validador->obtener_clave(), PASSWORD_DEFAULT),
		 $_POST['telefono']);

		
		echo $validador->obtener_Direccion().'<br>';
		echo $validador->obtener_dni().'<br>';
			
		$cliente_insertado = RepositarioClientes :: insertar_cliente(Conexion :: obtener_conexion(), $cliente);

		if($cliente_insertado) { 
			redireccion::redirigir(RUTA_REGISTRO_CORRECTO . '?nombreCliente=' . $_POST['nombreCliente']);
		}  

	}	

	Conexion :: cerrar_conexion();
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
	<title>Registro</title>
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
		 		<a href="<?php echo RUTA_INICIO?>" class="navbar-brand">
		 			Veterinaria
		 		</a>
		 	</div>
		 	<div id="navbar" class="navbar-collapse collapse">
		 		<ul class="nav navbar-nav">
		 		<li>
		 		<a href="<?php echo RUTA_INICIO?>">Inicio<span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
		 		</li>
		 		<li>
		 		<a href="<?php echo RUTA_QUIENESSOMOS?>">¿Quiénes somos?</a>
		 		</li>
		 		<li>
		 		<a href="<?php echo RUTA_INFORMACION?>">Información</a>	
		 		</li>	
		 		</ul>
		 		<ul class="nav navbar-nav navbar-right">
		 		<li>
		 		<a href="<?php echo RUTA_LOGIN?>">Iniciar Sesión</a>	
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
			<h1 class="text-center">Formulario de Registro</h1>
			</div>
		</div>
		<div class="container">
			<div class="row">
					<div class="col-md-6 text-center">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h3 class="panel-titlle" align="center">TIPS</h3>
												<div class="panel-body">
													<br>
													<p class="text-justify">Registrate para ser parte de esta hermosa familia!</p>
													<p class="text-justify">Podras reservar una cita, comprar productos online entre otras funcionalidades. </p>	
													<br>
													<a href="login.php">¿Ya tienes cuenta?</a>
													<br>
													<br>
													<a href="#">¿Olvidaste tu contraseña?</a>
												</div>	
											</div>
										</div>	
							</div>
			
					<div class="col-md-6 text-center">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h3 class="panel-tittle">Introduce tus Datos</h3>
												<div class="panel-body">
													<form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
															<?php
														if(isset($_POST['registrar'])){
															include_once 'registro_validado.inc.php';
														}else{
															include_once 'registro_vacio.inc.php';
														}
														?>
													</form>
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