<?php

    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM profes";
    $query=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal</title>
</head>
<body>
    <h1>Personal</h1>
    <div class="todo">
<div class="container mt-5">
    <div class="row"> 

    
        <div class="col-md-8">
            <table class="table" >
                <thead class="table-success table-striped" >
                    <tr>
                        <th>Cargo/s</th>
                        <th>Nombre/s</th>
                        <th>Apellido/s</th>
                        <th>Materia/s</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                        <?php
                            while($row=mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <th><?php  echo $row['rol']?></th>
                                <th><?php  echo $row['nombre']?></th>
                                <th><?php  echo $row['apellido']?></th>
                                <th><?php  echo $row['materia']?></th>    
                               
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