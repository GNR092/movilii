<?php

require_once '../core/config.php';
/////nos conectamos al DataBase 
$link = conectar();
////Preparamos nuestra consulta
$sql = "SELECT * FROM users WHERE users = $first_name";
////ejecutamos una consulta y la guardamos en una variable
$tableUser = $link -> query($sql);

////obtenermos 1 registro
$i=0;
while ($registros = $tableUser -> fetch_array(MYSQLI_BOTH)){
    $usuarios[$i] = $registros;
    $i++;
}

echo json_encode($usuarios);