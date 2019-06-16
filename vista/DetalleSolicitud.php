<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hackathon</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>


<style type="text/css">
  .center{
    margin-left: auto;
    margin-right: auto;
    display: block;
  }

  }
  </style>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<!-- .container nos permite centrar el contenido de nuestro menu, esta clase es opcional y podemos encerrar el menu <nav> o incluir el contenedor dentro del <nav> -->
		<div class="container">
			<!-- Nos sirve para agregar un logotipo al menu -->
			<a href="inicio.php" class="navbar-brand">PCRU</a>
					
		</div>
	</nav>
	</br>
	</br>
	<h2>Detalle de la Solicitud </h2>
	</br>
	</br>
	<div class="row mt-7">

	<?php 
	 $idSolicitud=$_GET['id'];
	include 'conexion.php';


	$consulta=("SELECT * FROM solicitud WHERE IdSolicitud='$idSolicitud'");
	$query=mysqli_query($conexion, $consulta);
	
	while ($f=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
	
?>

			<div class="col-12 col-md-4 col-sm-12">
				<div class="card">
					<img src="<?php echo $f['Imagen'];?>" width="300" height="300" class="center"/>
					<div class="card-body">
					<b><span><?php echo $f['Nombres'];?></span></b><br>
					<span><strong>Descripcion:</strong><?php echo $f['Descripcion'];?></span><br>
					<span><strong>Ubicacion</strong>:<?php echo $f['Ubicacion'];?></span><br>
					</div>
    				</div>
			</div>
			
		
	<?php 
	}

	?>
	</div>

	</div>
</body>
</html>