<?php

    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM cooperadora";
    $query=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
</head>
<body>
    <h1>Productos</h1>
    <div class="todo">
<div class="container mt-5">
    <div class="row"> 

    
        <div class="col-md-8">
            <table class="table" >
                <thead class="table-success table-striped" >
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Estado</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                        <?php
                            while($row=mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <th><?php  echo $row['producto']?></th>
                                <th><?php  echo $row['precio']?></th>
                                <th><?php  echo $row['estado']?></th>
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