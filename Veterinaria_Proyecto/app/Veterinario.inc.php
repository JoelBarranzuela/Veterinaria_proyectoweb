<?php
class Veterinario{

	private $idVeterinario;
	private $nombreVet;
	private $ApePaterno;
	private $ApeMaterno;
	private $Direccion;
	private $dni;
	private $password;
	private $telefono

	publioc function __construct($idEmpleado,$nombreVet,$ApePaterno,$ApeMaterno,$Direccion,$dni,$password,$telefono){

		$this -> idEmpleado= $idEmpleado;
		$this -> nombreVet=$nombreVet;
		$this -> ApePaterno = $nombrePaterno;
		$this -> ApeMaterno = $ApeMaterno;
		$this -> Direccion = $Direccion;	
		$this -> dni = $dni;
		$this -> password = $password;
		$this -> telefono = $telefono;

	}

	public function obtenerId(){
		return $this -> idEmpleado;
	}
	public function obtenerNombre(){
		return $this -> nombreVet;
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
	public function obtenerPassword(){
		return $this -> password;
	}
	public function obtenerTelefono(){
		return $this -> telefono;
	}
	

  public function cambiarNombre($nombreVet){
		 $this  -> nombreVet = $nombreVet;
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