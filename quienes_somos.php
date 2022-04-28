<?php

    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM quienes_somos";
    $query=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiénes Somos</title>
</head>
<body>
    <h1>Quiénes Somos</h1>
    <div class="todo">
<div class="container mt-5">
    <div class="row"> 

    
        <div class="col-md-8">
            <table class="table" >
                <thead class="table-success table-striped" >
                </thead>

                <tbody>
                        <?php
                            while($row=mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <th><?php  echo $row['somos']?></th>    
                            </tr>
                        <?php 
                            }
                        ?>
                </tbody>
            </table>
        </div>
    </div>  
</div>

</div>
</body>
</html>