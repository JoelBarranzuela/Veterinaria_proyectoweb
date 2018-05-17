<?php
class Cita{

	private $idCita;
	private $idServicio;
	private $idVeterinario;
	private $idEmpleado;
	private $fecha;

	publioc function __construct($idCita,$idServicio,$idVeterinario,$idEmpleado,$fecha){

		$this -> idCita= $idCita;
		$this -> idServicio=$idServicio;
		$this -> idVeterinario = $idVeterinario;
		$this -> idEmpleado = $idEmpleado;
		$this -> fecha = $fecha;
			}

	public function obtenerId(){
		return $this -> idCita;
	}

	public function obtenerIdServicio(){
		return $this -> idServicio;
	}

	public function obtenerIdVeterinario(){
		return $this -> idVeterinario;
	}

	public function obtenerIdEmpleado(){
		return $this -> idEmpleado
	}
	public function obtenerFecha(){
		return $this -> fecha;
	}
	

  public function cambiarNombre($fecha){
		 $this  -> 	fecha = $fecha;
	}

}