




<?php
 include 'conexion.php';

	$nombre=$_POST['Nombre'];
	$descripcion=$_POST['Descripcion'];
	$fecha_actual=date("YYYY/mm/dd");
	$ubicacion=$_POST['Ubicacion'];
	$latitud=$_POST['Latitud'];
	$longitud=$_POST['Longitud'];
	$imagen=$_POST['Imagen'];
	$titulo=$_POST['titulo'];
	$detalles=$_POST['detalles'];
	
	$insertar="INSERT INTO SOLICITUD (IdSolicitud,Nombres,Descripcion,Fecha,Ubicacion,Latitud,Longitud,IdUsuario,Imagen) VALUES (9,'$nombre','$descripcion','$fecha_actual','$ubicacion','$latitud','$longitud',2,'$imagen')";
	$insertar2="INSERT INTO VOTACION (Titulo,Detalles,Contador_positivo,Contador_negativo,Total,IdUsuario) VALUES ('$titulo','$detalles',0,0,0,2)";
	$resultado=mysqli_query($conexion,$insertar);
	$resultado2=mysqli_query($conexion,$insertar2);
if (!$resultado) {
	echo "$nombre";
	echo "$descripcion";
	echo "$fecha_actual";
	echo "$ubicacion";
	echo "$latitud";
	echo "$longitud";
	echo "$imagen";
	echo "titulo";
	echo "detalles";
	echo "Error al ingresar2";
}
else if (!$resultado2) {
	echo "Error al ingresar1";
}
else{
echo "usuario registrado exitosamente";
	//header("Location:../customer_navbar.php");
}

?>
