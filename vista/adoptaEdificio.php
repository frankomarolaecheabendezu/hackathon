<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Solicitud de Pratimonio</title>



	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>

<style type="text/css">
body{
    color: white; /*El texto de la página será blanco */

}
.card{

    color: white; /*El texto de la página será blanco */

}
  .center{
    margin-left: auto;
    margin-right: auto;
    display: block;
  }

table {
  font-family: "Helvetica Neue", Helvetica, sans-serif
}

caption {
  text-align: left;
  color: silver;
  font-weight: bold;
  text-transform: uppercase;
  padding: 5px;
}

thead {
  background: SteelBlue;
  color: white;
}

th,
td {
  padding: 5px 10px;
}

tbody tr:nth-child(even) {
  background: WhiteSmoke;
}

tbody tr td:nth-child(2) {
  text-align:center;
}

tbody tr td:nth-child(3),
tbody tr td:nth-child(4) {
  text-align: right;
  font-family: monospace;
}

tfoot {
  background: SeaGreen;
  color: white;
  text-align: right;
}

tfoot tr th:last-child {
  font-family: monospace;
}


  }
  </style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
		<a href="#" class="navbar-brand">PCRU</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Menu de Navegacion">
				<span class="navbar-toggler-icon"></span>
			</button>
		<div class="collapse navbar-collapse" id="navbar">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a href="#" class="nav-link">Registrar P_C <span class="sr-only">(Actual)</span></a>
					</li>
					
					<li class="nav-item">
						<a href="#" class="nav-link">Adopta tu edificio</a>
					</li>

					<li class="nav-item">
						<a href="#" class="nav-link">Cantidad</a>
					</li>

					<li class="nav-item">
						<a href="#" class="nav-link">Calificaciones</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Concursos</a>
					</li>
				</ul>
			
				<form action="" class="form-inline my-2 my-lg-0">
					<input type="text" class="form-control mr-sm-2" placeholder="Buscar" arial-label="Buscar">
					<button class="btn btn-primary my-s my-sm-0" type="submit">Buscar</button>
				</form>
			</div>
		</div>
	</nav>


	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
				
			<a href="inicio.php" class="navbar-brand">Solicitudes de Patrimonio Cultural</a>

			<form method="post" action="registrarProducto.php" >
		<input type="submit"  class="btn btn btn-warning btn-lg btn-block" value="Añadir Producto"/> 
		</form>	
				</div>
	</nav>
	<div class="row mt-3">
	<?php  
	include 'conexion.php';
	$consulta="SELECT * FROM producto ORDER BY idProducto ASC";
	$query=mysqli_query($conexion, $consulta);
	
	while ($f=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
	
?>
		<div class="col-12 col-md-4 col-sm-12">
				<form method="post" action="inicio.php?action=add&id=<?php echo $f['idProducto'];?>">
				<div class="card">
					<img src="<?php echo $f['Imagen'];?>" width="320" height="240" class="center"/>
					<div class="card-footer">
					<input type="text" name="quantity" disabled="true" class="form-control" value="<?php echo $f['Nombre'];?>"/>
					<input type="hidden" name="hidden_nombre" value="<?php echo $f['Nombre'];?>"/>
					<input type="hidden" name="hidden_precio" value="<?php echo $f['Precio'];?>"/>
					</div>					
					<a href="Detalles.php?id=<?php echo $f['idProducto'];?>" class="btn btn btn-warning btn-lg btn-block">Ver detalle
	<img src="https://lh3.googleusercontent.com/lhGthtdL0EEbhDxr8rsjlMtqHCBKjmWxxWyuhmTGuS7RKAylnk4EEtkVxJ8jY2qFLUHn=w300" width="20" height="20"/>
    	</a>
			
					</div>
				</form>
			</div>
			
		
	<?php 
	}

	?>
	</div>
		</div>		
</body>
</html>