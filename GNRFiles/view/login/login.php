<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Login</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<header>
		<!--.logo-->
		<div id="logo" class="logo">
			<img src="img/logo.jpg">
		</div>
		<!--.logo-->
	</header>
	<div class="login">
		<form class="tabla" action="login_user.php" method="POST">
		<h3>Usuario</h3>
		<div >
	    	<!--<img src="img/user2.png" width="40" height="40"/>-->
	    	<input type="src" name="log_usuario" placeholder="Usuario" required=""><br>
		</div>
			
		<h3>Contraseña</h3>
		<div >
	    	<!--<img src="img/pass.png"/>-->
	    	<input type="password" name="log_contra" placeholder="Contraseña" required=""><br><br>
		</div>
		<button type="submit" class="btn_iniciar">Iniciar</button> <br>
		<button type="submit" class="btn_iniciar" id="myBtn">Registrar</button> <br>
		</form>

	</div>

	<!--Cuadro Login-->
	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- contenido de modal-->
	    <div class="modal-content">
	    	<div class="modal-header">
	    		<button type="button" class="close" data-dismiss="modal">&times;</button>
	    		 <h3 class="formulario__titulo">Registro</h3>
		    </div>
		    <div class="modal-body">
		    	<!--DATOS PERSONALES-->
		    	<form action="registro.php" class="formulario" method="POST">
  				  <label for="" class="formulario__label">Nombre(s)</label>
				  <input type="text" class="formulario__input" name="nombre">

				  <label for="" class="formulario__label">Apellido Paterno</label>
				  <input type="text" class="formulario__input" name="apat">

				  <label for="" class="formulario__label">Apellido Materno</label>
				  <input type="text" class="formulario__input" name="amat">

				  <label for="" class="formulario__label">Correo</label>
				  <input type="email" class="formulario__input" name="email">

				  <label for="" class="formulario__label">Teléfono</label>
				  <input type="text" class="formulario__input" name="phone" required="Solo acepta Numeros">

				  <label for="" class="formulario__label">Fecha de Nacimiento</label>
				  <input type="date" class="formulario__input" name="date"><br>

				  <!-- Datos de la cuenta-->
				  <label for="" class="formulario__label">Usuario</label>
				  <input type="text" name="usuario" class="formulario__input">

				  <label for="" class="formulario__label">Contraseña</label>
				  <input type="password" name="password" class="formulario__input"><br>

				  <input type="submit" class="formulario__submit" value="Registrar">
				</form>  
		    
		    </div>
        </div>

    </div>
    </div> 

 <script src="js/login.js"></script>
</body>
</html>