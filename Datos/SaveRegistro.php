<?php
   include 'conexion.php';
   
    //tomar Variables Registro

    $Sujeto=$_POST['Sujeto'];
    $Espacio=$_POST['Espacio'];
    $Genero=$_POST['Genero'];
    $Imagen = addslashes(file_get_contents ($_FILES["foto"]["tmp_name"]));
    $Video = addslashes(file_get_contents ($_FILES["video"]["tmp_name"]));
    $Validacion=$_POST['Validaciones'];
    $tiempo=$_POST['tiempo'];
    $Observaciones=$_POST['Observaciones'];
    //Realizamos la sentencia
    $sql="INSERT INTO experimento VALUES('','','$Sujeto','$Espacio','$Genero','$Imagen','$Video','$Validacion','$tiempo','$Observaciones')";

    $ejecutar=$mysqli->query($sql);
    //verificamos la ejecucion
    if(!$ejecutar){
        echo"Ocurrio un error";
    }else{
        echo"Datos almacenados correctamente <a href='../Registro.php'>volver</a>     <a href='../VisualizeExp.php'>ver datos</a>";
    }
    
?>