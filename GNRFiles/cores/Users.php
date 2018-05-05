<?php
include_once 'conexion.php';

class UserInfo
{ 
    var $con;
    function __construct()
    {
       $this->con = conectar();
    }

    public function Register($nickname,$password,$firstName,$lastName,$numberPhone)
    {
        $sql= "INSERT INTO users(nick,pass)"."VALUES('".$nickname."','".$password."')";
        
        $res = mysqli_query($this->con,$sql);
        
        if(mysqli_connect_errno())
        {
            return false;
        }
        if($res)
        {
            $id = $this->GetIDForUserName($nickname);

            $sql1 = "INSERT INTO clients (id_user,first_name,last_name,number_phone)  VALUES($id,'".$firstName."','".$lastName."','".$numberPhone."');";
            $res1 = mysqli_query($this->con,$sql1);
           
            if($res1)
            {
                return true;
            }
            else
            {
                $sql1 = "DELETE FROM users WHERE nick=".$nickname;
                mysqli_query($this->con,$sql1);
                return false;
            }
        }
        else
            {
                return false;
            }
    }
    public function CheckAvaiableNick($nick)
    {
        $sql = "SELECT * FROM users WHERE nick='".$nick."'";
        $response = mysqli_query($this->con,$sql);
        if($response)
        {
            $user = $response->fetch_assoc();
            if($user['nick'] == $nick)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

    }
    public function GetUserForName($nick)
    {
        $sql = "SELECT * FROM users WHERE nick='".$nick."'";
        $response =mysqli_query($this->con,$sql);
        if($response)
        {
            $user = $response->fetch_assoc();
            return $user;
        }
        else
        {
            return -1;
        }
    }
    public function GetIDForUserName($nick)
    {
        $sql = "SELECT * FROM users WHERE nick='".$nick."'";
        $response =mysqli_query($this->con,$sql);
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
    function GetUserForID($ID)
    {
        $sql = "SELECT * FROM users WHERE id_user='".$ID."'";
       $response =mysqli_query($this->con,$sql);
       if($response)
       {
           $user = $response->fetch_assoc();
           return $user;
       }
       else
       {
           return -1;
       }
    }
}





?>