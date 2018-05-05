<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$DBuser ="root";
$DBpass="GNR092";
$DBserver="localhost";
$DBdatos="imdigital";

function conectar(){
    $DBuser ="root";
    $DBpass="GNR092";
    $DBserver="localhost";
    $DBdatos="imdigital";
   
    $link =  new mysqli($DBserver,$DBuser,$DBpass,$DBdatos); 
    if($link->connect_errno){
        echo 'Error en la coneccion '.  mysqli_connect_error().PHP_EOL;
        return false;
    }
    else{
        
        return $link;
    }
}
class db
{
    
    public $DB;

    public function __construct()
    {
        global $DBserver,$DBuser,$DBpass,$DBdatos;

        $link =  new mysqli($DBserver,$DBuser,$DBpass,$DBdatos); 
        if($link->connect_errno)
        {
            echo 'Error en la coneccion '.  mysqli_connect_error().PHP_EOL;
            $this->DB = null;
        }
        else
        {
            $this->DB = $link;
        }
    }

    public function NewUser($nickname,$password,$firstName,$lastName,$numberPhone)
    {
        $sql = "INSERT INTO users (nick,pass)"."VALUES('".$nickname."','".$password."')";
        $res = mysqli_query($this->DB,$sql);
        if($res)
        {
            return $this->GetIDForNickName($nickname);            
        }
        else
        {
            return -1;
        }
    }
    
    function CreateProfile($id,$firstName,$lastName,$numberPhone)
    {
        $sql = "INSERT INTO clients (id_user,first_name,last_name,number_phone)  VALUES('".$id."','".$firstName."','".$lastName."','".$numberPhone."')";
        $res = mysqli_query($this->DB,$sql);
        return $res;
    }

    public function GetIDForNickName($nick)
    {
        $sql = "SELECT * FROM users WHERE nick='".$nick."'";
        $response =mysqli_query($this->DB,$sql);
        if($response)
        {
            $user = $response->fetch_assoc();
            return $user['id_user'];
        }
        else
        {
           return -1;
        }
    }
}
?>
