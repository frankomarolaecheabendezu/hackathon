<?php
 include 'conexion.php';

	$nombre=$_POST['Nombre_colegio'];
	$anio=$_POST['anio'];
	$seccion=$_POST['seccion'];
	$procedencia=$_POST['procedencia'];
	$tipoC=$_POST['tipoC'];
	
	
	$insertar="INSERT INTO `inscripcion_concurso` (`IdInscripcion`, `Nombre_colegio`, `Anio`, `Seccion`, `Procedencia`, `IdUsuario`, `Tipo_colegio`) VALUES ('', '$nombre', '$anio', '$seccion', '$procedencia', '2', '$tipoC');";
	$resultado=mysqli_query($conexion,$insertar);
if (!$resultado) {
	echo "Error al ingresar";
}
else{
echo "usuario registrado exitosamente";
	//header("Location:../customer_navbar.php");
}

?>
