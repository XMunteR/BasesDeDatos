<?php
    include 'conexion.php';

    //recuperamos variables
    $Lugar = $_POST['Place'];
    $Fecha = $_POST['Date'];
    $Time  = $_POST['Time'];

    //Realizamos la sentencia 
    $sql = "INSERT INTO genexp VALUES ('','$Lugar','$Fecha','$Time')";

    $ejecutar=$mysqli->query($sql);
    //verificamos la ejecucion
    if(!$ejecutar){
        echo"Ocurrio un error";
    }else{
        echo"Datos almacenados correctamente <a href='../Registro.php'>volver</a>";
    }


?>