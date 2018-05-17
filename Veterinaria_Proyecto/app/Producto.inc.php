<?php
class Producto{

	private $idProducto;
	private $NombreProduc;
	private $PrecioProduc;
	private $idProveedor;
	private $idTipoProducto;
	private $idStock;
	
	publioc function __construct($idProducto,$NombreProduc,$PrecioProduc,$idProveedor,$idTipoProducto,$idStock){

		$this -> idProducto= $idProducto;
		$this -> NombreProduc=$NombreProduc;
		$this -> PrecioProduc = $PrecioProduc;
		$this -> idProveedor = $idProveedor;
		$this -> idTipoProducto = $idTipoProducto;
		$this -> idStock = $idStock;
		
	}

	public function obtenerId(){
		return $this -> idDetalle_Venta;
	}

	public function obtenerNombreProduc(){
		return $this -> NombreProduc;
	}

	public function obtenerPrecioProduc(){
		return $this -> PrecioProduc;
	}

	public function obtenerIdProveedor(){
		return $this -> idProveedor
	}
	
	public function obtenerIdTipoProducto(){
		return $this -> idTipoProducto
	}
		public function obtenerIdStock(){
		return $this -> idStock;
	}
	
	
	

  public function cambiarNombreProduc($NombreProduc){
		 $this  -> 	NombreProduc = $NombreProduc;
	}

  public function cambiarPrecioProduc($PrecioProduc){
		 $this  -> 	PrecioProduc = $PrecioProduc;
	}


}