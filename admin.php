<?php

    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: ingreso.php');
    }else{
        if($_SESSION['rol'] != 1){
            header('location: ingreso.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
    <h1>Administrador</h1>
    <a href="validar.php?cerrar_sesion=1">Salir</a>
    
</body>
</html>