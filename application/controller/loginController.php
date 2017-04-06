<?php
	session_start();

	if(!isset($_SESSION['usuario'])){

		if($_POST){

			require 'application/model/usuarioClass.php';
			$usuario = new Usuario();
			$usuario->login($_POST['rut'], $_POST['pass'], isset($_POST['session']) ? 'y' : 'n');

		}else{

			$title = 'Login';
			require 'application/view/login/index.php';

		}
		
	}else{
		header('location: ?view=index');
	}
?>