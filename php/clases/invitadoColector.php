<?php


	require_once("../clases/colector.php");

	class invitadoColector{

		private $modelo;

		public function __construct(){

			$this->modelo = new colector(); //Al crear el objeto modelo se crea un objeto de tipo colector
		}

		//FUNCION CONSULTAR
		public function ListarInvitado(){

			try{

				$result = $this->modelo->Listar("invitado");

				return $result;

			}catch(Exception $e){

				die($e->getMessage());

			}
		}//END FUNCTION


		

		

	}//END CLASS

?>
