<?php
class Cliente{

	private $idCliente;
	private $nombreCliente;
	private $ApePaterno;
	private $ApeMaterno;
	private $Direccion;
	private $dni;
	private $password;
	private $telefono;

	public function __construct($idCliente,$nombreCliente,$ApePaterno,$ApeMaterno,$Direccion,$dni,$password,$telefono){

		$this -> idCliente= $idCliente;
		$this -> nombreCliente=$nombreCliente;
		$this -> ApePaterno = $ApePaterno;
		$this -> ApeMaterno = $ApeMaterno;
		$this -> Direccion = $Direccion;
		$this -> dni = $dni;
		$this -> password = $password;
		$this -> telefono = $telefono;

	}

	public function obtenerId(){
		return $this -> idCliente;
	}
	public function obtenerNombre(){
		return $this -> nombreCliente;
	}
	public function obtenerApePaterno(){
		return $this -> ApePaterno;
	}
	public function obtenerApeMaterno(){
		return $this -> ApeMaterno;
	}
	public function obtenerDireccion(){
		return $this -> Direccion;
	}
	public function obtenerdni(){
		return $this -> dni;
	}
	public function obtenerPassword(){
		return $this -> password;
	}
	public function obtenerTelefono(){
		return $this -> telefono;
	}
	

  public function cambiarNombre($nombreCliente){
		 $this  -> nombreCliente = $nombreCliente;
	}

	public function cambiarApePaterno($ApePaterno){
		 $this  -> ApePaterno = $ApePaterno;
	}

public function cambiarApeMaterno($ApeMaterno){
		 $this  -> ApeMaterno = $ApeMaterno;
	}

public function cambiarDireccion($Direccion){
		 $this  -> Direccion = $Direccion;
	}

public function cambiardni($dni){
		 $this  -> dni = $dni;
	}

public function cambiarPassword($password){
		 $this  -> password = $password;
	}

public function cambiarTelefono($telefono){
		 $this  -> telefono = $telefono;
	}


}