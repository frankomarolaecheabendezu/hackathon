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
    color: black; /*El texto de la página será blanco */

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
						<a href="#" class="nav-link">Registrar P_C</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Gestionar Solicitud</a>
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
			</div>
		</div>
	</nav>


	<div class="container">
	
				
			<a href="inicio.php" class="navbar-brand">Registra a tu Promo!!!</a>
		    <form action="registrarPromo.php" method="post">
			<strong><h4>Datos de Promo:</h4></strong>		
			<div class="col-12 col-md-6 col-sm-12">
			Nombre del Colegio: <input type="text"  class="form-control" name="Nombre_colegio" required><br>
			<div class="form-group">
			  <label for="anio">Año:</label>
			  <select class="form-control" name="anio">
			  	<option value="--">--</option>
			    <option value="4to">4to</option>
			    <option value="5to">5to</option>
			  </select>
			</div>
			Sección:<input type="text" class="form-control" name="seccion" autocomplete="off" required><br>	
			Procedencia (Ubicacion): <input type="text" name="procedencia" class="form-control" autocomplete="off" ><br>
			<div class="form-group">
			  <label for="tipo Colegio">Tipo de Colegio:</label>
			  <select class="form-control" name="tipoC">
			    <option value="--">--</option>
			    <option value="Privado">Privado</option>
			    <option value="Estatal">Estatal</option>
			  </select>
			</div>
			</div>
			<input type="submit" class="btn btn-success" name="registro" value="Registrar Promoción"><br><br>
			</form>	
			</div>
		
</body>
</html>