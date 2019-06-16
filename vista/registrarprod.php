<?php
 include 'conexion.php';

	$url=$_POST['url'];
	$descripcion=$_POST['descripcion'];
	$nombre=$_POST['nombre'];
	$precio=$_POST['precio'];
	
	$insertar="INSERT INTO `producto`(`idProducto`, `Imagen`, `Descripcion`, `Nombre`, `Precio`) VALUES ('','$url','$descripcion','$nombre','$precio')";
	$resultado=mysqli_query($conexion,$insertar);
if (!$resultado) {
	echo "Error al registrar";
}
else{
echo "usuario registrado exitosamente";
header("Location:inicio.php");
}

?>
