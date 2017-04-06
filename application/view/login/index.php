<?php require'Application/View/public/header.php';?>
		<main>
            <div class="container">
			    <div class="row valign-wrapper" style="height:600px">
			        <div class="col s12 m6 offset-m3">
			          	<div class="card black-text hoverable">
			          		<form id="form" name="login" action ="?view=login" method="post">
					            <div class="card-content">
				                    <div class="row">
				                        <div class="input-field col s12">
				                            <input id="rut" name="rut" type="text" tabindex="1" />
				                            <label class="grey-text" for="rut">Rut</label>
				                        </div>
				                    </div>
				                    <div class="row">
				                        <div class="input-field col s12">
				                            <input id="pass" name="pass" type="password" tabindex="2" />
				                            <label class="grey-text" for="pass">Password</label>
				                        </div>
				                    </div>
				                    <div class="row">
				                        <div class="col s12">
				                            <p>
				                                <input type="checkbox" name="session" id="session" tabindex="3" />
				                                <label class="grey-text" for="session">Recordarme</label>
				                            </p>
				                        </div>
				                    </div>
					            </div>
					            <div class="card-action">
					              	<button type="submit" class="btn btn-large waves-effect waves-light">Iniciar Sesión</button>
					            </div>
					    	</form>        
			          	</div>
			        </div>
			    </div>
			</div>
		</main>
	</body>
</html>