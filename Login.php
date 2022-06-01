<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/Style.css">
	<title>Login</title>
</head>
<body>
	
	
	<div class="login-side-bar">
		<p class="login-Admin-text">Ingreso de datos Administrador</p>
	</div>
	
	<img class="login-head" src="img/login-head.png">

	<form action="Datos/ValidLogin.php" method="POST">
		
	<label class="login-signin">Sign In</label>

	<label class="login-Username">Nombre</label>
	<input class="login-Usuarme-txt" type="text" name="Usuarme">

	<label class="login-Password">Contraseña</label>
	<input class="login-Password-txt" type="password" name="Password">


	<input class="login-signUp" type="submit" value="Sign Up">
	<!-- <a class="login-signUp" href="Registro.php">Sign Up</a> -->

	</form>


	
</body>
</html>