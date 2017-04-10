<?php
	session_start();

	if(isset($_SESSION['usuario'])){
		echo 'index page';
		//include 'logoutController.php';
	}else{
		header('location: login');
	}
?>