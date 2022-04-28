<?php
include("conexion.php");
$con=conectar();

$titulo=$_POST['titulo'];
$contenido=$_POST['contenido'];

$sql="INSERT INTO `noticias` (`titulo`,`contenido`) VALUES('$titulo','$contenido')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: colab.php");
}else {
}
?>

