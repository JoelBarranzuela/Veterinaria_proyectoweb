<?php
class Paciente{

	private $idPaciente;
	private $NombreMasc;
	private $Especie;
	private $idCliente;

	publioc function __construct($idPaciente,$NombreMasc,$Especie,$idCliente){

		$this -> idPaciente= $idPaciente;
		$this -> NombreMasc=$NombreMasc;
		$this -> Especie = $Especie;
		$this -> idCliente = $idCliente;
			}

	public function obtenerId(){
		return $this -> idPaciente;
	}
	public function obtenerNombre(){
		return $this -> NombreMasc;
	}
	public function obtenerEspecie(){
		return $this -> Especie;
	}
	public function obteneridCliente(){
		return $this -> idCliente;
	}

	

  public function cambiarNombre($NombreMasc){
		 $this  -> 	NombreMasc = $NombreMasc;
	}

	public function cambiarEspecie($Especie){
		 $this  -> Especie = $Especie;
	}



}