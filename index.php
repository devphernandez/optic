<?php
	
	//variable de la vista, se define por url.
	$view = isset($_GET['view']) ? $_GET['view'] : 'index';
	
	//controlador de las librerias
	include 'application/controller/centralController.php';

	if(file_exists('application/controller/'.$view.'Controller.php')){
		include 'application/controller/'.$view.'Controller.php';
	}else{
		include 'application/controller/errorController.php';
	}
	
?>