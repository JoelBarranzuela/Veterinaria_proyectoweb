<?php
class Proveedor{

	private $idProveedor;
	private $NombreProv;
	private $NombreProd;
	private $Precio;
	private $Telefono;

	publioc function __construct($idProveedor,$NombreProv,$NombreProd,$Precio,$Telefono){

		$this -> idProveedor= $idProveedor;
		$this -> NombreProv=$NombreProv;
		$this -> NombreProd = $NombreProd;
		$this -> Precio = $Precio;
		$this -> Telefono = $Telefono;
			}

	public function obtenerId(){
		return $this -> idProveedor;
	}
	public function obtenerNombreProv(){
		return $this -> NombreProv;
	}
	public function obtenerNombreProd(){
		return $this -> NombreProd;
	}
	public function obtenerPrecio(){
		return $this -> Precio;
	}
	public function obtenerTelefono(){
		return $this -> Telefono;
	}
	

  public function cambiarNombreProv($NombreProv){
		 $this  -> 	NombreProv = $NombreProv;
	}
	
	public function cambiarNombreProd($NombreProd){
		 $this  -> NombreProd = $NombreProd;
	}
  public function cambiarPrecio($Precio){
		 $this  -> 	Precio = $Precio;
	}

	public function cambiarTelefono($Telefono){
		 $this  -> Telefono = $Telefono;
	}


}