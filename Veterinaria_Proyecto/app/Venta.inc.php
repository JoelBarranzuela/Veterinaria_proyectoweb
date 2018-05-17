<?php
class Venta{

	private $idVenta;
	private $idProducto;
	private $idCliente;
	private $Fecha;
	private $num_comprobacion;


	publioc function __construct($idVenta,$idProducto,$idCliente,$Fecha,$num_comprobacion){

		$this -> idVenta= $idVenta;
		$this -> idProducto=$idProducto;
		$this -> idCliente = $idCliente;
		$this -> Fecha = $Fecha;
		$this -> num_comprobacion = $num_comprobacion;
	
			}

	public function obtenerId(){
		return $this -> idVenta;
	}
	public function obtenerIdProducto(){
		return $this -> idProducto;
	}
	public function obtenerIdCliente(){
		return $this -> idCliente;
	}
	public function obtenerFecha(){
		return $this -> Fecha;
	}
	public function obtenernum_comprobacion(){
		return $this -> num_comprobacion;
	}
	

  public function cambiarFecha($Fecha){
		 $this  -> 	Fecha = $Fecha;
	}

	public function cambiarnum_comprobacion($num_comprobacion){
		 $this  -> num_comprobacion = $num_comprobacion;
	}



}