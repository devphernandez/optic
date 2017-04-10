<?php
	session_start();

	if(isset($_SESSION['usuario'])){
		?>
			<p>index page</p>
			<a href="dashboard">dashboard</a><br>
			<a href="logout">salir</a>
		<?php
	}else{
		header('location: login');
	}
?>