<?php
    
    $usuario = "usu";
    $contraseña = "1234";

    $Usuarme = $_POST['Usuarme'];
    $Password = $_POST['Password'];

    if($Usuarme == $usuario && $Password == $contraseña){
        session_start();
        $_SESSION["Usuarme"] = $Usuarme;
        header("location: ../Registro.php");
    }else{
        echo"El usuario o contraseña son incorrectos <a href='../Login.php'>Volver</a>";
    }
    



?>