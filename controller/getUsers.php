<?php
require_once '../core/config.php';
//se conecta a la base de datos
$link=conectar();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//conuta
$sql="SELECT * FROM users";

$tabla=$link->query($sql); //leer una consulta y se guarda en una variable
$i=0;
while($registro=$tabla->fetch_array(MYSQLI_BOTH)){
    $users[$i]=$registro;
    $i++;
}
echo json_encode($users);