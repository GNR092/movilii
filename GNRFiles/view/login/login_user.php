<?php
    $usuario = $_POST['log_usuario'];
	$pass = $_POST['log_contra'];

	if(empty($usuario) || empty($pass)){
		header("Location: http://xooljonatanitsp.000webhostapp.com/anuncios_progreso/view/login/login.php");
		exit();
	}
	//Conexion con la base de datos
	require_once '../../cores/conexion.php';
    
    //consulta para logueo	
	$sql = "SELECT * FROM login where usuario= '".$usuario."'AND Password='".$pass."'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	header("Location: http://xooljonatanitsp.000webhostapp.com/anuncios_progreso/view/sesion/sesion.php");
	    }
	    
	} else {
	    header("Location: http://xooljonatanitsp.000webhostapp.com/anuncios_progreso/view/login/login.php");
	}
	//$conn->close();
?>