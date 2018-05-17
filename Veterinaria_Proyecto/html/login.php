<?php
  include_once '../app/config.inc.php';
  include_once '../app/Conexion.inc.php';
  include_once '../app/redireccion.inc.php';
  include_once '../app/RepositarioClientes.inc.php';
  include_once '../app/ValidadorLogin.inc.php';
  include_once '../app/ControlSesion.inc.php';
  include_once '../app/config.inc.php';
  include_once '../app/Conexion.inc.php';
  


  if (isset($_POST['login'])) {
  	Conexion::abrir_conexion();
  	$validador = new ValidadorLogin($_POST['nombreCliente'], $_POST['clave'], Conexion::obtener_conexion());

  		if ($validador ->obtener_error() === '' && !is_null($validador->obtener_cliente())) {
  			
 			     ControlSesion::iniciar_sesion($validador->obtener_cliente()->obtenerId(),$validador->obtener_cliente()->obtenerNombre()); 		
  		 redireccion::redirigir(RUTA_INICIO_ADMINISTRADOR);
  }

  Conexion::cerrar_conexion();

}
?>


<!DOCTYPE html>
<html lang="es">
<head>
	<title>Iniciar Sesion</title>
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
			<div class="row">
					<div class="col-md-3">
						</div>
								<div class="col-md-6">
									<div class="panel panel-default">
										<div class="panel-heading text-center">
											<h3>Ingrese sus datos</h3>
										</div>
												<div class="panel-body text-center">
												<form role="form" method="post" action=<?php echo $_SERVER['PHP_SELF']?>>
												<h3>Ingresa tu usuario</h3>
												<br>
												<label for="nombreCliente" class="sr-only"></label>
												<input type="text" class="form-control" name="nombreCliente" placeholder="Ejemplo: Usario555" 
												<?php 
												if (isset($_POST['login']) && isset($_POST['nombreCliente'])) {
												 	echo 'value="'. $_POST['nombreCliente'] . '"';
												 } ?> required="autofocus" >
												<br>
												<h3>Ingresa tu contraseña </h3>
												<br>
												<label for="clave" class="sr-only"></label>
												<br>
												<input type="password" class="form-control" name="clave" placeholder="Password" 
												<?php
												 if (isset($_POST['login'])) {
												 	$validador ->mostrar_error();
												 }
												?>
												required="autofocus">
												<br>
												<br>
												<button type="submit" name="login" class="btn btn-lg btn-primary btn-block">Iniciar Seseión</button>
												<br>
												</div>	
											</form>
											<br>
											<br>
											<div class="text-center">
												<a href="#">¿Olvidaste tu contraseña?</a>
													</div>
									
								</div>
							</div>

           					</div>
           				</div>

		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.js"></script>

	</body>
</html>