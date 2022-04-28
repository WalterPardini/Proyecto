<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$ingreso20=$_POST['ingreso20'];
$preguntas=$_POST['preguntas'];


$sql="UPDATE ingreso SET ingreso20='$ingreso20', preguntas='$preguntas' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: colab.php");
    }
?>