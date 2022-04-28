<?php
include("conexion.php");
$con=conectar();

$rol=$_POST['rol'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$materia=$_POST['materia'];

$sql="INSERT INTO `profes` (`rol`,`nombre`, `apellido`, `materia`) VALUES('$rol','$nombre','$apellido','$materia')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: colab.php");
}else {
}
?>