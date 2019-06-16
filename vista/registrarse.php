<?php
 include 'conexion.php';

	$nombre=$_POST['nombre'];
	$correo=$_POST['correo'];
	$username=$_POST['username'];
	$contrasena=$_POST['pass'];
	$cel=$_POST['cel'];
	
	$insertar="INSERT INTO `usuario`(`idUsuario`, `Nombre`, `Correo`, `Username`, `Password`, `Celular`) VALUES ('','$nombre','$correo','$username','$contrasena','$cel')";
	$resultado=mysqli_query($conexion,$insertar);
if (!$resultado) {
	echo "Error al ingresar";
}
else{
echo "usuario registrado exitosamente";
	//header("Location:../customer_navbar.php");
}

?>
