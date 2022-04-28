<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$titulo=$_POST['titulo'];
$contenido=$_POST['contenido'];

$sql="UPDATE noticias SET titulo='$titulo', contenido='$contenido' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: colab.php");
    }
?>
