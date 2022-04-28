<?php
include("conexion.php");
$con=conectar();

$producto=$_POST['producto'];
$precio=$_POST['precio'];
$estado=$_POST['estado'];

$sql="INSERT INTO `cooperadora` (`producto`,`precio`, `estado`) VALUES('$producto','$precio','$estado')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: colab.php");
}else {
}
?>