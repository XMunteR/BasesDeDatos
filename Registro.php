<?php 
	include 'Datos/conexion.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/Style.css">
	<title>Registro de datos</title>
</head>
<body>
	
	<div class="Registro-top-Banner">
		<p class="Registro-top-text">Registro de Datos</p>
	</div>
	<form action="Datos/SaveExp.php" method="POST">
	<div class="Registro-top-Exp">
		<p class="Registro-topBox-Exp">Experimento</p>
		<div class="Registro-box-Exp">

			<p class="Registro-box-content-lugar">Lugar</p>
			<input class="Registro-box-Exp-lugar" type="text" name="Place">

			<p class="Registro-box-content-Fecha">Fecha</p>
			<input class="Registro-box-Exp-Date" type="text" name="Date">

			<p class="Registro-box-content-Hora">Hora</p>
			<input class="Registro-box-Exp-Time" type="text" name="Time">

			<button class="Registro-box-Exp-btn" name="send-exp">Enviar</button>
		</div>
	</div>
	</form>

	<form action="Datos/SaveRegistro.php" method="POST" enctype="multipart/form-data">
	<div class="Registro-top-Reg">
	<p class="Registro-topBox-Reg">Registro</p>
		<div class="Registro-box-Reg">
			
		<p class="Registro-box-Reg-sujeto">Sujeto #</p>	
		<input class="Registro-box-reg-sujeto-input" type="text" name="Sujeto">
		
		<p class="Registro-box-Reg-Espacio">Espacio</p>
		<input class="Registro-box-reg-Espacio-input" type="text" name="Espacio">

		<p class="Registro-box-Reg-Genero">Género Sujeto</p>
		<input class="Registro-box-Reg-Genero-input" type="text" name="Genero">

		<p class="Registro-box-Reg-Validaciones">Validación</p>
		<input class="Registro-box-Reg-Validaciones-input" type="text" name="Validaciones">

		<p class="Registro-box-Reg-Tiempo">Tiempo</p>
		<input class="Registro-box-Reg-Tiempo-input" type="text" name="tiempo">

		<p class="Registro-box-Reg-Observaciones">Observaciones</p>
		<input class="Registro-box-Reg-Observaciones-input" type="text" name="Observaciones">
		
		<p class="Registro-box-Foto-label" >Foto</p>
		<input class="Registro-box-Foto" type="file" name="foto">

		<p class="Registro-box-Video-label">Video</p>
		<input class="Registro-box-Video" type="file" name="video">

		<button class="Registro-box-Reg-btn" name="send-Reg">Enviar</button>

		</div>
	</div>
	</form>
</body>
</html>