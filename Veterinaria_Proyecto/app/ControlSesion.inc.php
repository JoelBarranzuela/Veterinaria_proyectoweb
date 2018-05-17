<?php

class ControlSesion{

		public static function iniciar_sesion($idCliente, $nombre_cliente){

				if(session_id() == ''){

					session_start();
				}

                $_SESSION['idCliente'] = $idCliente;
                $_SESSION['nombre_cliente'] = $nombre_cliente;

		}




		public static function cerrar_sesion(){

				if(session_id() == ''){

					session_start();
				}


				if (isset($_SESSION['idCliente'])) {
					unset($_SESSION['idCliente']);
				}

                
				if (isset($_SESSION['nombre_cliente'])) {
					unset($_SESSION['nombre_cliente']);

				}

				session_destroy();

					}


				public static function sesion_iniciada(){


				if(session_id() == ''){

					session_start();
				}


					 if (isset($_SESSION['idCliente']) && isset($_SESSION['nombre_cliente'])) {
					return true;
				}else{

					return false;

				}

                

				}
                

		}










