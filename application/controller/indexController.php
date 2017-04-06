<?php
	session_start();

	if(isset($_SESSION['usuario'])){
		echo 'index page';
	}else{
		header('location: login');
	}
?>