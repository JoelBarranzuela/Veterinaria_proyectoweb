<?php
class redireccion{

	public static function redirigir($url){

		//header("Refresh:3; url=".$url);
		header('Location: '.$url,true,301);		
		exit();

	}

}