<?php

function conectar(){
    ///Parametros
    $BDuser="id3119033_victor18582";
    $BDpass="a17645";
    $BDserver="localhost";
    $BDdatos="id3119033_usersdb";
    
    /////////////// Nuevos metodos de coneccion 
    
    $link = mysqli_connect($BDserver, $BDuser, $BDpass, $BDdatos);
    
    if (!$link){
        echo "Error en la conexión". mysqli_connect_errno().PHP_EOL;
        return null;
    }else{
        return $link;
    }
}
