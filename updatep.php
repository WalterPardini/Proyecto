<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$rol=$_POST['rol'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$materia=$_POST['materia'];

$sql="UPDATE profes SET rol='$rol', nombre='$nombre',apellido='$apellido',materia='$materia' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: colab.php");
    }
?>