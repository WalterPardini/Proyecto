<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$historia=$_POST['historia'];


$sql="UPDATE historia_es SET historia='$historia' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: colab.php");
    }
?>