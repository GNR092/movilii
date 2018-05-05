<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../core/config.php';
/////nos conectamos al DataBase 
$link = conectar();

/////resepcion de datos
$firstName= null;
$lastName=null;
$nombrerphone=null;

///Guardaelos en la base detos 
if($first_name!=null)
{
    $first_name = $_GET['first_name'];
}
if($last_name!=null)
{
    $last_name = $_GET['last_name'];
}
if($nombrer_phone==null)
{
    $nombrerphone = $_GET['nombrer_phone'];
}
else{
    echo 'las variables no pueden estar vacias';
    return;
}
$sql="INSERT INTO users(first_name,last_name,nombrer_phone) "
        . "VALUE('".$firstName."','".$lastName."','".$nombrerphone."')";
//ejecuta la sentencia sql
$response = $link->query($sql);

//verificamos los resultados
if($response){
    echo 'guardado';
}else {
    echo $link->error;
}