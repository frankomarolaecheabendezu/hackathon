<?php  

	$Nombre_Usuario=$_POST['Nombre_Usuario'];
	$Contrasena=$_POST['Contrasena'];
	include 'conexion.php';
		$sql="SELECT * FROM usuario WHERE Nombre_Usuario='$Nombre_Usuario' AND Password='$Contrasena'";
	$result=mysqli_query($conexion,$sql);

	$filas=mysqli_num_rows($result);
    $fila = $result->fetch_assoc();
	
	if ($filas>0) {
	$idusu=$fila['IdUsuario'];
	echo $idusu;
	$consulta2="SELECT idTipo_Usuario FROM usuario_has_tipo_usuario WHERE idUsuario='$idusu'";
	$resultado1=mysqli_query($conexion,$consulta2);
	$fin2 = mysqli_fetch_assoc($resultado1);
	//echo "<script>Console.log(".$fin2['idTipo_Usuario'].")</script>";
	
	if ($fin2['idTipo_Usuario']==1) {
		header("location:inicio.php");
	}
	else{
	header("location:inicioPersonas.php");	
	}
		
	}
	else{
		header("location:login.html");
		echo "lol";
	}
