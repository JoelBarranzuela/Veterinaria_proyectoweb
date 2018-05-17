<?php
include_once 'RepositarioClientes.inc.php';
class ValidarRegistro
{

	private $aviso_inicio;
	private $aviso_cierre;

	private $nombreCliente;
	private $ApePaterno;
	private $ApeMaterno;
	private $Direccion;
	private $dni;
	private $telefono;
  private $clave;

	private $errornombreCliente;
	private $errorApePaterno;
	private $errorApeMaterno;
	private $errorDireccion;
	private $errordni;
	private $errortelefono;
	private $errorclave1;
	private $errorclave2;

	public function __construct($nombreCliente, $ApePaterno, $ApeMaterno, $Direccion, $dni, $telefono, $clave1, $clave2,$conexion){
 
				$this->aviso_inicio="<br><div class='alert alert-danger' role='alert'>";
				$this->aviso_cierre= "</div>";

 				$this->nombreCliente = ""; 
 				$this->ApePaterno = "";
 				$this->ApeMaterno = "";
 				$this->Direccion = "";
 				$this->dni = "";
 				$this->telefono = "";
        $this->clave = "";

 				$this->errornombreCliente = $this->validar_nombre($conexion,$nombreCliente);
 				$this->errorApePaterno = $this->validar_apePaterno($ApePaterno);
 				$this->errorApeMaterno = $this->validar_apeMaterno($ApeMaterno);
 				$this->errorDireccion = $this->validar_direccion($Direccion);
 				$this->errordni = $this->validar_dni($dni);
 				$this->errortelefono = $this->validar_telefono($telefono);
 				$this->errorclave1 = $this->validar_clave1($clave1);
 				$this->errorclave2 = $this->validar_clave2($clave1,$clave2);

        if ($this->errorclave1 === "" && $this->errorclave2 === "") {
                $this->clave = $clave1;
              }			
	}




    private function variable_iniciada($variable){

    	if(isset($variable) && !empty($variable)){

				return true;

			} else {

	 return false;
			}
    }
 
  private function validar_nombre($conexion,$nombreCliente){

  	if(!$this->variable_iniciada($nombreCliente)){

  			return " Debes escribir tu nombre de usuario";

  	}else{

  		$this ->nombreCliente=$nombreCliente;
  	}

  	if(strlen($nombreCliente)<6){

  		return "El nombre debe ser más largo que 6 caracteres ";

  	}

  	 	if(strlen($nombreCliente)>24){

  		return "El nombre no debe ser más largo que 30 caracteres ";

  	}

    if (RepositarioClientes::nombre_existe($conexion,$nombreCliente)) {
      return "Este nombre de usuario ya esta en uso. Porfavor ingrese otro nombre";
    }

  	return "";

  }

  private 	function validar_apePaterno($ApePaterno){

  	if(!$this->variable_iniciada($ApePaterno)){

  			return " Debes escribir tu Apellido Paterno";

  	}else{

  		$this ->ApePaterno=$ApePaterno;
  	}

  	if(strlen($ApePaterno)<6){

  		return "El Apellido Paterno debe ser mayor de 6 caracteres";

  	}

  	 	if(strlen($ApePaterno)>24){

  		return "El Apellido Paterno no debe ser más largo que 30 caracteres ";

  	}


  	return "";

  }


  private 	function validar_apeMaterno($ApeMaterno){

  	if(!$this->variable_iniciada($ApeMaterno)){

  			return " Debes escribir tu Apellido Materno";

  	}else{

  		$this ->ApeMaterno=$ApeMaterno;
  	}

  	if(strlen($ApeMaterno)<6){

  		return "El Apellido Materno debe ser mayor de 6 caracteres";

  	}

  	 	if(strlen($ApeMaterno)>24){

  		return "El Apellido Materno no debe ser más largo que 30 caracteres ";

  	}


  	return "";

  }


 private 	function validar_clave1($clave1){

  	if(!$this->variable_iniciada($clave1)){

  			return " Debes escribir tu contraseña";

  	}

  	return "";

  }
 private 	function validar_clave2($clave1,$clave2){

  	if(!$this->variable_iniciada($clave1)){

  			return " Primero debes rellenar la contraseña";

  	}
  	if (!$this->variable_iniciada($clave2)) {
  		return " Debes repetir tu contraseña";
  	}
  	if ($clave1 !== $clave2) {
  		return "Ambas contraseñas deben coincidir";
  	}
  	return "";

  }

  private 	function validar_telefono($telefono){

  	if(!$this->variable_iniciada($telefono)){

  			return " Debes escribir tu telefono";

  	}

  	return "";
  }
 private 	function validar_direccion($Direccion){

  	if(!$this->variable_iniciada($Direccion)){

  			return " Debes escribir tu direccion";

  	}

  	return "";
}

 private 	function validar_dni($dni){

  	if(!$this->variable_iniciada($dni)){
  			return " Debes escribir tu dni";

  	}

  	return "";
}
  public function obtener_nombre(){
  	return $this->nombreCliente;
  }
  public function obtener_apePaterno(){
  	return $this->ApePaterno;
  }
  public function obtener_apeMaterno(){
  	return $this->ApeMaterno;
  }

  public function obtener_Direccion(){
  	return $this->Direccion;
  }
  public function obtener_dni(){
  	return $this->dni;
  }
  public function obtener_telefono(){
  	return $this->telefono;
  }
  public function obtener_clave(){
    return $this->clave;
  }
  public function obtener_error_nombre(){
  	return $this->errornombreCliente;
  }
  public function obtener_error_apePaterno(){
  	return $this->errorApePaterno;
  }
  public function obtener_error_apeMaterno(){
  	return $this->errorApeMaterno;
  }
  public function obtener_error_Direccion(){
  	return $this->errorDireccion;
  }
  public function obtener_error_dni(){
  	return $this->errordni;
  }
  public function obtener_error_telefono(){
  	return $this->errortelefono;
  }
  public function obtener_error_clave1(){
  	return $this->errorclave1;
  }
  public function obtener_error_clave2(){
  	return $this->errorclave2;
  }

  public function mostrar_nombre(){
  	if ($this->nombreCliente !== "") {
  		echo 'value="' . $this->nombreCliente .  '"';
  	}
  }
  public function mostrar_apePaterno(){
    if ($this->ApePaterno !== "") {
      echo 'value="' . $this->ApePaterno .  '"';
    }
  }public function mostrar_apeMaterno(){
    if ($this->ApeMaterno !== "") {
      echo 'value="' . $this->ApeMaterno .  '"';
    }
  }public function mostrar_Direccion(){
    if ($this->Direccion !== "") {
      echo 'value="' . $this->Direccion .  '"';
    }
  }public function mostrar_dni(){
    if ($this->dni !== "") {
      echo 'value="' . $this->dni .  '"';
    }
  }public function mostrar_telefono(){
    if ($this->telefono !== "") {
      echo 'value="' . $this->telefono .  '"';
    }
  }
  public function mostrar_error_nombre(){
  		if ($this->errornombreCliente !== "") {
  			echo $this->aviso_inicio . $this->errornombreCliente . $this->aviso_cierre;	
  	}
  }
  public function mostrar_error_ApePaterno(){
      if ($this->errorApePaterno !== "") {
        echo $this->aviso_inicio . $this->errorApePaterno . $this->aviso_cierre; 
    }
  }
  public function mostrar_error_ApeMaterno(){
      if ($this->errorApeMaterno !== "") {
        echo $this->aviso_inicio . $this->errorApeMaterno . $this->aviso_cierre; 
    }
  }
  public function mostrar_error_Direccion(){
      if ($this->errorDireccion !== "") {
        echo $this->aviso_inicio . $this->errorDireccion . $this->aviso_cierre; 
    }
  }
  public function mostrar_error_dni(){
      if ($this->errordni !== "") {
        echo $this->aviso_inicio . $this->errordni . $this->aviso_cierre; 
    }
  }
  public function mostrar_error_telefono(){
      if ($this->errortelefono !== "") {
        echo $this->aviso_inicio . $this->errortelefono . $this->aviso_cierre; 
    }
  }
  public function mostrar_error_clave1(){
      if ($this->errorclave1 !== "") {
        echo $this->aviso_inicio . $this->errorclave1 . $this->aviso_cierre; 
    }
  }
  public function mostrar_error_clave2(){
      if ($this->errorclave2 !== "") {
          echo $this->aviso_inicio . $this->errorclave2 . $this->aviso_cierre; 
      }
    }


    public function registro_valido(){

        if ($this->errornombreCliente === "" && $this->errorApePaterno === "" && $this->errorApePaterno === "" &&
      $this->errorApeMaterno === "" &&
    $this->errorDireccion === "" &&
  $this->errordni === "" &&
$this->errortelefono === "" &&
$this->errorclave1 === "" &&
$this->errorclave2 === "") {
          return true;
            
        } else {
          return false;
        }
  }
}

  
