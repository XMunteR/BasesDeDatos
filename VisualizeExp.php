<?php
	include 'Datos/conexion.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styleVisualize.css">
    <title>Experimentos</title>
</head>
<body>
    <div class="Experimentos-top-bar">
    <p class="Experimentos-top-text">Datos experimento social (conformidad)</p>
    </div>


<table class="view" border="1">

    <tr>
        <td class="elementos-tabla">ID</td>
        <td class="elementos-tabla">Sujeto</td>
        <td class="elementos-tabla">Espacio</td>
        <td class="elementos-tabla">GeneroSujeto</td>
        <td class="elementos-tabla">Fotos</td>
		<td class="elementos-tabla">Video</td>
		<td class="elementos-tabla">validacion</td>	
		<td class="elementos-tabla">Tiempo</td>		
        <td class="elementos-tabla">Observaciones</td>
        
	

    </tr>
		<?php

			$sql="SELECT * from experimento";
			$result = $mysqli->query($sql);

			while($mostrar=mysqli_fetch_array($result)){	
		?>
		
	<tr>
		<td><?php echo $mostrar['ID_Experimento']?></td>
		<td><?php echo $mostrar['Sujeto']?></td>
		<td><?php echo $mostrar['Espacio']?></td>
		<td><?php echo $mostrar['GeneroSujeto']?></td>
		<td><?php echo '<img height="100" width="100" src="data:image/jpeg;base64,'.base64_encode($mostrar['Fotos']).'"/>'?></td>
		<td><?php echo '<video controls>';
                  echo '<source type="video/webm" height="80" width="80" src="data:video/webm;base64,'.base64_encode($mostrar['Videos']).'"/>';
                  echo '<source type="video/mp4" height="80" width="80" src="data:video/mp4;base64,'.base64_encode($mostrar['Videos']).'"/>';
                   echo '</video>';?></td>
		<td><?php echo $mostrar['validacion']?></td>
		<td><?php echo $mostrar['tiempo']?></td>
		<td><?php echo $mostrar['obsGenerales']?></td>
	</tr>
	 

	<?php
			}
	?>
</body>
</html>