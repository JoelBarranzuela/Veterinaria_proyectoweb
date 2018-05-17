<?php


class RepositarioClientes 
{
	
	public static function obtener_todos($conexion)
	{
		$clientes = array();

		if(isset($conexion)){
			try{

				include 'Cliente.inc.php';
				$sql = "SELECT * FROM cliente";
				$sentencia=$conexion->prepare($sql);
				$sentencia->execute();
				$resultado=$sentencia->fetchAll();
				if(count($resultado)){
					foreach ($resultado as $fila) {
						$clientes[]= new Cliente($fila['idCliente'],$fila['nombreCliente'],$fila['ApePaterno'],$fila['ApeMaterno'],$fila['Direccion'],$fila['dni'],$fila['password'],$fila['telefono']);
					}

				}else{

					print "No hay Clientes";
				}

			}catch(PDOException $ex){

				print "ERROR" . $ex->getMessage();

			}


		}
			return $clientes;
	}

	public static function obtener_numero_usuarios($conexion){
		$total_cliente=null;


		if(isset($conexion)){
			try{

				$sql = "SELECT COUNT(*) as total FROM cliente";
				$sentencia=$conexion->prepare($sql);
				$sentencia->execute();
				$resultado=$sentencia->fetch();
				$total_cliente=$resultado['total'];

				
			}catch(PDOException $ex){

				print "ERROR" . $ex->getMessage();

			}




	}
	return $total_cliente;
}
 

 public static function insertar_cliente($conexion, $cliente){

 				$usuario_insertado = false;

		if (isset($conexion)){
			try{

						$nombre = $cliente -> obtenerNombre();
						$ApePaterno =  $cliente -> obtenerApePaterno();
						$ApeMaterno =$cliente -> obtenerApeMaterno();
						$direccion = $cliente -> obtenerDireccion();
						$dni =  $cliente -> obtenerdni();
						$password =$cliente -> obtenerPassword();
						$telefono =$cliente -> obtenerTelefono();

				
		    $sql = "INSERT INTO cliente(nombreCliente,ApePaterno,ApeMaterno,Direccion,dni,password,telefono) 
				VALUES(:nombreCliente, :ApePaterno, :ApeMaterno, :Direccion, :dni, :password, :telefono)";
				$sentencia= $conexion -> prepare($sql);
		 


				$sentencia ->  bindParam(':nombreCliente', $nombre, PDO::PARAM_STR);
				$sentencia ->  bindParam(':ApePaterno', $ApePaterno , PDO::PARAM_STR);
				$sentencia ->  bindParam(':ApeMaterno', $ApeMaterno , PDO::PARAM_STR);
				$sentencia ->  bindParam(':Direccion', $direccion , PDO::PARAM_STR);
				$sentencia ->  bindParam(':dni', $dni, PDO::PARAM_STR);
				$sentencia ->  bindParam(':password', $password , PDO::PARAM_STR);
				$sentencia ->  bindParam(':telefono', $telefono , PDO::PARAM_STR);
				$usuario_insertado = $sentencia -> execute();
			

			}catch(PDOException $ex){

				print "ERROR" . $ex->getMessage();

			}

	}

	return $usuario_insertado;

 }


 	public static function nombre_existe($conexion, $nombreCliente){

 				$nombre_existe = true;

		if (isset($conexion)){
			try{


				
		    $sql = "SELECT * FROM cliente where nombreCliente=:nombreCliente";
				$sentencia= $conexion -> prepare($sql);
		 


				$sentencia ->  bindParam(':nombreCliente', $nombreCliente, PDO::PARAM_STR);
				$sentencia -> execute();
				$resultado = $sentencia -> fetchAll();


				if (count($resultado)) {
					$nombre_existe=true;
					# code...
				}else{
					$nombre_existe=false;
				}
			

			}catch(PDOException $ex){

				print "ERROR" . $ex->getMessage();

			}

	}

	return $nombre_existe;

 }


 public static function obtener_usuario_por_nombreCliente($conexion,$nombreCliente){


 							$cliente = null;

		if (isset($conexion)){
			try{


				include 'Cliente.inc.php';
				
		    $sql = "SELECT * FROM cliente where nombreCliente =:nombreCliente";
				$sentencia= $conexion -> prepare($sql);
		 


				$sentencia ->  bindParam(':nombreCliente', $nombreCliente, PDO::PARAM_STR);
			
				$sentencia -> execute();
				$resultado = $sentencia ->fetch();

				if (!empty($resultado)) {
					$cliente = new Cliente($resultado['idCliente'],$resultado['nombreCliente'],$resultado['ApePaterno'],$resultado['ApeMaterno'],$resultado['Direccion'],$resultado['dni'],$resultado['password'],$resultado['telefono']);
				}

			}catch(PDOException $ex){

				print "ERROR" . $ex->getMessage();

			}

	}

	return $cliente;


 }

}