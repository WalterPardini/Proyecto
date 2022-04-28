<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$somos=$_POST['somos'];


$sql="UPDATE quienes_somos SET id='$id', somos='$somos' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: colab.php");
    }
?>