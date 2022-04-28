<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$producto=$_POST['producto'];
$precio=$_POST['precio'];
$estado=$_POST['estado'];

$sql="UPDATE cooperadora SET producto='$producto', precio='$precio',estado='$estado' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: colab.php");
    }
?>