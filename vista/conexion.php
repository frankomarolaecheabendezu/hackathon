<?php
	 $server="localhost";
 $username="root";
 $password="12345";
 $db='hacka';
 $conexion=mysqli_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
 $sdb=mysqli_select_db($conexion,$db)or die("la base de datos no existe");
?>