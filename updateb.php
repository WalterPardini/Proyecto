<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$balancea=$_POST['balancea'];


$sql="UPDATE balance SET balancea='$balancea' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: colab.php");
    }
?>