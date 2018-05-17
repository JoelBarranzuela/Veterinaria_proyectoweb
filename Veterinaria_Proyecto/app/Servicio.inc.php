<?php
class Servicio{

	private $idServicio;
	private $NombreServicio;
	private $costoServicio;


	publioc function __construct($idServicio,$NombreServicio,$costoServicio){

		$this -> idServicio= $idServicio;
		$this -> NombreServicio=$NombreServicio;
		$this -> costoServicio = $costoServicio;
	
			}

	public function obtenerId(){
		return $this -> idServicio;
	}
	public function obtenerNombreServicio(){
		return $this -> NombreServicio;
	}
	public function obtenercostoServicio(){
		return $this -> costoServicio;
	}
	

  public function cambiarNombreServicio($NombreServicio){
		 $this  -> 	NombreServicio = $NombreServicio;
	}

	public function cambiarcostoServicio($costoServicio){
		 $this  -> costoServicio = $costoServicio;
	}



}