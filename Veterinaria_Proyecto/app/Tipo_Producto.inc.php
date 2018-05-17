<?php
class Tipo_Producto{

	private $idTipo_Producto;
	private $nombre_tprod;
	


	publioc function __construct($idTipo_Producto,$nombre_tprod){

		$this -> idTipo_Producto= $idTipo_Producto;
		$this -> nombre_tprod=$nombre_tprod;
		
			}

	public function obtenerId(){
		return $this -> idTipo_Producto;
	}
	public function obtenerNombreTprod(){
		return $this -> nombre_tprod;
	}
	

  public function cambiarNombreTprod($nombre_tprod){
		 $this  -> 	nombre_tprod = $nombre_tprod;
	}




}