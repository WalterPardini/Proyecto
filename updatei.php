<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$info=$_POST['info'];
$auto=$_POST['auto'];
$oferta=$_POST['oferta'];


$sql="UPDATE institucional SET info='$info', auto='$auto', oferta='$oferta' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: colab.php");
    }
?>