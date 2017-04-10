<?php
	class Usuario{

		/**
		 * Description
		 * @param type $rut 
		 * @param type $pass 
		 * @param type $session 
		 * @return type
		 */
		public function login($rut, $pass, $session){

			try{

				if(!empty($rut) && !empty($pass)){
					$objConn = new Database();
					$sql = "CALL LOGIN($rut, $pass, @resp)";
					if($objConn->query($sql)->rowCount() > 0){
						$json['success'] = true;
						$json['redirect'] = true;
						$json['location'] = 'index';
						$this->cargarUsuario($objConn, $sql);
					}
				}else{
					$json['error'] = true;
					$json['msg'] = 'Credenciales vacías.';
				}
			}catch(Exception $e){
				$json['error'] = true;
				$json['msg'] = 'Credenciales incorrectas.';
				Utiles::logger(__CLASS__, 'Intento de inicio de sesión con el rut '.$rut);
			}
			
			echo json_encode($json);

		}

		/**
		 * Description
		 * @param type $objConn 
		 * @param type $sql 
		 * @return type
		 */
		private function cargarUsuario($objConn, $sql){
			foreach ($objConn->query($sql)->fetchAll() as $key => $value) {
				$_SESSION['usuario']['id'] 		= $value['USU_ID'];
				$_SESSION['usuario']['name'] 	= $value['USU_NAME'];
				$_SESSION['usuario']['mail'] 	= $value['USU_MAIL'];
				$_SESSION['usuario']['rut'] 	= $value['USU_RUT'];
				$_SESSION['usuario']['type'] 	= $value['USU_TYPE'];
				$_SESSION['usuario']['store'] 	= $value['TIE_NAME'];
			}
			Utiles::logger(__CLASS__, 'El usuario '.$_SESSION['usuario']['name'].' a iniciado sesión.');
		}

	}

?>