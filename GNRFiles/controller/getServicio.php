<?php
	//conexion con la base de datos
	require_once '../cores/conexion.php';
	//require_once '../view/login/conexion.php';
	//consulta de la tabla clientes con el usuario de login

	$sql="SELECT tipo_prod, Cantidad, Precio_unitario FROM productos";

	$tablaProducto=$conn->query($sql); //leer una consulta y se guarda en una variable
	$i=0;
	while($fila=$tablaProducto->fetch_array(MYSQLI_BOTH)){
	    $producto[$i] =$fila;
        $i++;
     //   echo $fila['codigo']."<br>";
	}
	//cerrar($link);
	echo json_encode($producto);
?>