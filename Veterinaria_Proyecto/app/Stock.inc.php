<?php
class Stock{

	private $idStock;
	private $totalStock;
	


	publioc function __construct($idStock,$totalStock){

		$this -> idStock= $idStock;
		$this -> totalStock=$totalStock;
		
			}

	public function obtenerId(){
		return $this -> idStock
	public function obtenertotalStock(){
		return $this -> totalStock;
	}
	

  public function cambiartotalStock($totalStock){
		 $this  -> 	totalStock = $totalStock;
	}




}