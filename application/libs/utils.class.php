<?php

	class Utiles{

		static function logger($class, $msg){
			$log = new Logger();
			$log->addLine($class, $msg);
		}

		static function defineTipo($tipo){
			switch($tipo){
				case 1:
					return 'Administrador';
					break;
				case 2:
					return 'Vendedor';
					break;
				case 3:
					return 'Captador';
					break;
				default:
					//session_destroy();
					//return header('location: ?view=login');
					break;
			}
		}

	}

?>