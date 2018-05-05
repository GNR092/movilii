<?php
//include("conexion.php");
require_once '../../cores/conexion.php';
/**DATOS DEL CLIENTE**/
$nombre=$_POST['nombre'];
$apaterno=$_POST['apat'];
$amaterno=$_POST['amat'];
$telefono=$_POST['phone'];
$correo=$_POST['email'];
$fecha_nac=$_POST['date'];
/**DATOS DE LA CUENTA**/
$user=$_POST['usuario'];
$pass=$_POST['password'];

/**echo "conexion exitosa";**/

/**LLENADO DE LA TABLA LOGIN**/
$query="INSERT INTO login (usuario,Password) values('$user','$pass')";
$resultado=$conn->query($query);

/**LLENADO DE LA TABLA CLIENTES**/
$query3="INSERT INTO clientes(Telefono,nombres,usuario,apellido_paterno,apellido_materno,correo,fecha_nac) VALUES ('".$telefono."','".$nombre."','".$user."','".$apaterno."','".$amaterno."','".$correo."','".$fecha_nac."')";
$resultado3=$conn->query($query3);

	if ($resultado3&&$resultado) {
		/**echo "Los datos se ingresaron correctamente";**/
		header('Location: http://xooljonatanitsp.000webhostapp.com/anuncios_progreso/view/login/login.php');
		# code...
	}
	else{
		echo "ERROR, cargue la pagina de nuevo.";
	}
?>