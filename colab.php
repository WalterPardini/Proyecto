<?php

    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: login.php');
    }else{
        if($_SESSION['rol'] != 2){
            header('location: login.php');
        }
    }

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
    <title>Colaborador</title>
</head>
<body>
    <h1>Colaborador</h1>
    <div class="todo">
<!--            Docentes                                           -->
    <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertarp.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="rol" placeholder="Cargo/s">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre/s">
                                    <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido/s">
                                    <input type="text" class="form-control mb-3" name="materia" placeholder="Materia/s">

                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

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
                                                <th><a href="actualizarp.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="deletep.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                            $sql="SELECT *  FROM quienes_somos";
                                            $query=mysqli_query($con,$sql);
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
 
<!--           Docentes                                             -->

<!--           quienes somos                                            -->

            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Quienes Somos</h1>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['somos']?></th>  
                                                <th><a href="actualizarq.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>        
                                            </tr>
                                        <?php 
                                            }
                                            $sql="SELECT *  FROM historia_es";
                                            $query=mysqli_query($con,$sql);
                                        ?>
                                </tbody>
                            </table>
                        </div>
                                                         
<!--           quienes somos                                            -->

<!--           historia                                           -->
                        
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Historia</h1>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['historia']?></th>  
                                                <th><a href="actualizarh.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                                                         
<!--           historia                                           -->
</div>
    <a href="validar.php?cerrar_sesion=1">Salir</a>
</body>
</html>