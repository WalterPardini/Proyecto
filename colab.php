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

    $sql="SELECT *  FROM noticias";
    $query=mysqli_query($con,$sql);

    

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Colaborador</title>
</head>
<body>
    <h1>Colaborador</h1>
    <div class="todo">

    <!--            Docentes                                           -->
    <div class="container mt-5">
                    
                        <h1>Noticias</h1>
                        <br>
                        <br>
                        <div class="col-md-8">
                            <h1>Completar</h1>
                                <form action="insertarn.php" method="POST">
                                <br>
                        <br>
                                    <input type="text" class="form-control mb-3" name="titulo" placeholder="Titulo">
                                    <input type="text" class="form-control mb-3" name="contenido" placeholder="Contenido">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>
                        <br>
                        <br>
                        <div class="row"> 
                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Titulo</th>
                                        <th>Contenido</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['titulo']?></th>
                                                <th><?php  echo $row['contenido']?></th> 
                                                <th><a href="actualizarn.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="deleten.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                            $sql="SELECT *  FROM profes";
                                            $query=mysqli_query($con,$sql);
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
 
<!--           Docentes                                             -->
<!--            Docentes                                           -->
    <div class="container mt-5">
                    <div class="row"> 
                        <h1>Personal de la Escuela</h1>
                        <br>
                        <br>
                        <br>
                        <br>
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
                        <div >
                            <h1>Quienes Somos</h1>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tex>
                                                <th><?php  echo $row['somos']?></th>  
                                                <br>
                                                <br>
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
                        
                        <div>
                            <h1>Historia</h1>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['historia']?></th> 
                                                <br>
                                                <br> 
                                                <th><a href="actualizarh.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>        
                                            </tr>
                                        <?php 
                                            }
                                            $sql="SELECT *  FROM institucional";
                                            $query=mysqli_query($con,$sql);
                                        ?>
                                </tbody>
                            </table>
                        </div>
                                                         
<!--           historia                                           -->

<!--           institucional                                        -->
                        
<div class="container mt-5">
                    <div class="row"> 
                        
                    <div class="col-md-3">
                            <h1>Institucional</h1>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                            <br>
                                            
                                            <th><a href="actualizari.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>        
                                                <br>
                                                <br>
                                                <h3>- Información General</h3>
                                                <br>                      
                                                <th><?php  echo $row['info']?></th>
                                                <br>  
                                                <br>
                                                <h3>- Autoridades</h3>
                                                <br>
                                                <br>
                                                <th><?php  echo $row['auto']?></th> 
                                                <br>
                                                <br>
                                                <h3>- Oferta Educativa</h3>
                                                <br>
                                                <br>
                                                <th><?php  echo $row['oferta']?></th> 
                                                
                                            </tr>
                                        <?php 
                                            }
                                            $sql="SELECT *  FROM ingreso";
                                            $query=mysqli_query($con,$sql);
                                        ?>
                                </tbody>
                            </table>
                        </div>
                                                         
<!--           institucional                                       -->

<!--           ingreso                                       -->
                        
<div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingreso</h1>
                            <br>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                        <br>
                                            <tr>
                                            <th><a href="actualizaringreso.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>        
                                                <br>
                                                <br>
                                                <h3>- Ingreso 2022</h3>
                                                <br>
                                                <th><?php  echo $row['ingreso20']?></th>  
                                                <br>
                                                <br>
                                                <h3>- Preguntas Frecuentes</h3>
                                                <br>
                                                <th><?php  echo $row['preguntas']?></th> 

                                                
                                            </tr>
                                        <?php 
                                            }
                                            $sql="SELECT *  FROM cooperadora";
                                            $query=mysqli_query($con,$sql);
                                        ?>
                                </tbody>
                            </table>
                        </div>
                                                         
<!--           ingreso                                    -->

<!--            Cooperadora                                           -->
<div class="container mt-5">
                    <div class="row"> 
                    <h1>Cooperadora</h1>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="col-md-3">
                            <h1>Productos</h1>
                                <form action="insertarcoo.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="producto" placeholder="Producto">
                                    <input type="text" class="form-control mb-3" name="precio" placeholder="Precio">
                                    <input type="text" class="form-control mb-3" name="estado" placeholder="Estado">

                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

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
                                                <th><a href="actualizarcoo.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="deletecoo.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                            $sql="SELECT *  FROM balance";
                                            $query=mysqli_query($con,$sql);
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
 
<!--          cooperadora                                           -->
<!--           balance                                           -->

<div class="container mt-5">
                    <div class="row"> 
                        <div >
                            <h1>Balance Anual</h1>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tex>
                                                <th><?php  echo $row['balancea']?></th>  
                                                <br>
                                                <br>
                                                <th><a href="actualizarb.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                                                         
<!--           balance                                         -->
</div>
<br>
<br>
<th><a href="validar.php?cerrar_sesion=1" class="btn btn-danger">Cerrar Sesión</a></th>                                        
<br>
<br><br>
<br><br>
<br>
</body>
</html>