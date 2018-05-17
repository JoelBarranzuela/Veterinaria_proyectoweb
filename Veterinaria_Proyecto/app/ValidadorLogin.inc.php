<?php
include_once 'RepositarioClientes.inc.php';
include_once 'Conexion.inc.php';
include_once 'config.inc.php';
include_once 'ValidarRegistro.inc.php';

class ValidadorLogin {

		private $cliente;
		private $error;

		public function __construct($nombreCliente, $clave, $conexion){

			$this ->error="";

			if (!$this -> variable_iniciada($nombreCliente) || !$this->variable_iniciada($clave)) {
						$this -> cliente = null;
						$this -> error = " Debes introducir tu usuario y tu contraseña";
			} else{


					$this -> cliente = RepositarioClientes::obtener_usuario_por_nombreCliente($conexion,$nombreCliente);

					if (is_null($this->cliente) || !password_verify($clave, $this->cliente->obtenerPassword()))  {
						$this->error = " DATOS INCORRECTOS ";
					}

			}

		}
		   

		    private function variable_iniciada($variable){

		    	if(isset($variable) && !empty($variable)){

						return true;

					} else {

			 return false;
					}
		    }
		 		

 	public function obtener_cliente(){

 		return $this -> cliente;

 	}


 	public function obtener_error(){

 		return $this -> error;

 	}
		

 	public function mostrar_error(){

 		if ($this->error !== '') {
 			echo "<br><div class='alert alert-danger' role='alert'>";
 			echo $this->error;
 			echo "</div><br>";
 		}

 	}

		















}