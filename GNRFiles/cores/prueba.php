<?php
include("conexion.php");

$user=$_POST['user'];
$pass=$_POST['pass'];

/**echo "conexion exitosa";**/

$query="INSERT INTO login (usuario,password) values('$user','$pass')";
$resultado=$con->query($query);

	if ($resultado) {
		echo "Los datos se ingresaron correctamente";
		# code...
	}
	else{
		echo "no se ingresaron los datos";
	}
?>