<?php

    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM noticias";
    $query=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Escuela Agraria Duggan</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="description" content="Escuela Agraria Duggan">
</head>
<body>
	<header>
		<div class="container">
			<img id="logo" src="images/logonew.png" alt="VJHS logo">
			<br>
			<br>
			<h1>&nbsp&nbsp&nbspEscuela Agraria</h1>
			<h1>&nbsp&nbsp&nbspN°1 Duggan</h1>
			<br>
		</div>
		
		<!--seccion de botones-->

		<section class="botones">
			<a href="https://www.facebook.com/escueladeeducacionsecundariaagraria.duggan"  target="_blank" class="fa fa-facebook-square"></a>
			<a href="https://www.instagram.com/eesaduggan/?igshid=YmMyMTA2M2Y=" target="_blank" class="fa fa-instagram"></a>
		</section>

		<nav class="navegacion">
			<ul class="menu">
				<li><a href="#">Inicio</a>
					<ul class="submenu">
						<li><a href="index.php">Noticias</a></li>
						<li><a href="quienes_somos.php">¿Quiénes Somos?</a></li>
						<li><a href="historia.php">Historia</a></li>
						<li><a href="personal.php">Personal de la Escuela</a></li>
					</ul>
				</li>
				<li><a href="#">Institucional</a>
					<ul class="submenu">
						<li><a href="informacion_gral.php">Información General</a></li>
						<li><a href="autoriadades.php">Autoriadades</a></li>
						<li><a href="oferta.php">Oferta Educativa</a></li>
					</ul>
				</li>
				<li><a href="#">Alumnos</a>
					<ul class="submenu">
						<li><a href="https://es.padlet.com/eagropecuaria1duggan" target="_blank">Padlet Ciclo Inicial</a></li>
						<li><a href="https://padlet.com/eagropecuaria2duggan" target="_blank">Padlet Ciclo Superior</a></li>
						<li><a href="https://drive.google.com/drive/folders/1QVWJ6plw4Orsgj7sWqiV2nj84cPSQNsI?usp=sharing">Formularios</a></li>
						<li><a href="https://abc.gob.ar/nuestra-escuela" target="_blank">Declaración Jurada de Salud</a></li>
					</ul>
				</li>
				<li><a href="#">Docentes</a>
					<ul class="submenu">
						<li><a href="https://es.padlet.com/eagropecuaria1duggan" target="_blank">Padlet Ciclo Inicial</a></li>
						<li><a href="https://padlet.com/eagropecuaria2duggan" target="_blank">Padlet Ciclo Superior</a></li>
						<li><a href="http://www.abc.gov.ar/">ABC</a></li>
						<li><a href="https://abc.gob.ar/secretarias/">Formularios</a></li>
						<li><a href="https://abc.gob.ar/nuestra-escuela" target="_blank">Declaración Jurada de Salud</a></li>
					</ul>
				</li>
				<li><a href="#">Cooperadora</a>
					<ul class="submenu">
						<li><a href="productos.php">Productos</a></li>
						<li><a href="balance.php">Balance</a></li>
						<li><a href="cooperadora_contacto">Contacto</a></li>
					</ul>
				</li>
				<li><a href="#">Contacto</a>
					<ul class="submenu">
						<li><a href="telefono_mail.html">Teléfono y Mail</a></li>
						<li><a href="buzon_de_sugerencias">Buzon de Sugerencias</a></li>
						<li><a href="contactenos" target="_blank">Contáctenos</a></li>
					</ul>
				</li>
				<li><a href="#">Ingreso</a>
					<ul class="submenu">
						<li><a href="ingreso2022.php">Ingreso</a></li>
						<li><a href="contacto.php">Contacto</a></li>
						<li><a href="preguntas.php">Preguntas Frecuentes</a></li>
					</ul>
				</li>
				<li><a href="ingreso.html" target="_blank">Ingresar</a>
				</li>
			</ul>
		</nav>
	</header>
	
	<section id="main">
		<section class="container">
			<article id="main-content">
				<br>
				<h2>Noticias</h2>
		
				
		
				<div class="container mt-5">
					<div class="row"> 
				
					
						<div class="col-md-8">
							<table class="table" >
								<thead class="table-success table-striped" >
									<tr>
										<th></th>
										<th></th>
									</tr>
								</thead>
				
								<tbody>
										<?php
											while($row=mysqli_fetch_array($query)){
										?>
											
												<th><?php  echo $row['titulo']?></th>
												<th><?php  echo $row['contenido']?></th>
 
											
										<?php 
											}
										?>
								</tbody>
							</table>
						</div>
					</div>  
			</article>

		</section>

	</section>
	<script src=codigo.js></script>
</body>
</html>