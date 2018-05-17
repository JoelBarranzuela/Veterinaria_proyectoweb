<?php
class Detalle_Venta{

	private $idDetalle_Venta;
	private $idVenta;
	private $cant_producto;
	private $precio_unit;
	private $importe;
	private $monto_total;
	private $descripcion;
	publioc function __construct($idDetalle_Venta,$idVenta,$cant_producto,$precio_unit,$importe,$monto_total,$descripcion){

		$this -> idDetalle_Venta= $idDetalle_Venta;
		$this -> idVenta=$idVenta;
		$this -> cant_producto = $cant_producto;
		$this -> precio_unit = $precio_unit;
		$this -> importe = $importe;
		$this -> monto_total = $monto_total;
		$this -> descripcion = $descripcion;
	}

	public function obtenerId(){
		return $this -> idDetalle_Venta;
	}

	public function obtenerIdVenta(){
		return $this -> idVenta;
	}

	public function obtenerCantProd(){
		return $this -> cant_producto;
	}

	public function obtenerPrecioUnit(){
		return $this -> precio_unit
	}
	public function obtenerImporte(){
		return $this -> importe;
	}
		public function obtenerMontoTotal(){
		return $this -> monto_total;
	}
		public function obtenerDescripcion(){
		return $this -> descripcion;
	}
	

  public function cambiarCantProd($cant_producto){
		 $this  -> 	cant_producto = $cant_producto;
	}

  public function cambiarPrecioUnit($precio_unit){
		 $this  -> 	precio_unit = $precio_unit;
	}

  public function cambiarImporte($importe){
		 $this  -> 	importe = $importe;
	}

  public function cambiarMontoTotal($monto_total){
		 $this  -> 	monto_total = $monto_total;
	}

  public function cambiarDescripcion($descripcion){
		 $this  -> 	descripcion = $descripcion;
	}

}