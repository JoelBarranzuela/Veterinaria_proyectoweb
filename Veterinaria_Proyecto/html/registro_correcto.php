<?php
include_once '../app/config.inc.php';
include_once '../app/Conexion.inc.php';
include_once '../app/RepositarioClientes.inc.php';
include_once '../app/redireccion.inc.php';
include_once '../app/Cliente.inc.php';




if (isset($_GET['nombreCliente']) && !empty($_GET['nombreCliente'])){

	$nombreCliente = $_GET['nombreCliente']; 


}else{
	redireccion::redirigir(SERVIDOR);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Registro realizado</title>
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
?>

		
		<div class="container">
			<div class="row">
					<div class="col-md-12 text-center">
									<div class="panel panel-default">
										<div class="panel-heading">
										 <p>Registro Correcto</p>											
												<div class="panel-body text-center" >
													<br>
													<p class="text-justify">GRACIAS POR REGISTRARTE CARNAL<b><?php echo $nombreCliente?></b>!</p>
													<br>
													<p><a href="<?php echo RUTA_LOGIN ?>">INICIAR SESION</a> para comenzar a usar tu cuenta.</p>
													
												</div>	
											</div>
										</div>	
							</div>
			
		</div>



		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.js"></script>

	</body>
</html>

