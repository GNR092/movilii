<?php
include_once 'conexion.php';
include_once 'Users.php';
include_once 'Utils.php';

function GetClientForID($ID)
{
    $link = conectar();
    $sql = "SELECT * FROM clients WHERE id='".$ID."'";
    $response =mysqli_query($link,$sql);
    if($response)
    {
        $client = $response->fetch_assoc();
        return $client;
    }
    else
    {
        return -1;
    }
}





class Client
{
    array $Clients;

    public function __construct($table)
    {
        $user = new UserInfo();
        while($info = $table->fetch_array(MYSQLI_BOTH))
        {
        $this->Clients[$info['id_user']] = array(
            "UserID"=>$info['id_user'],
            "Nickname"=>$user->GetUserForID($info['id_user'])['nick'],
            "first_name"=>$info['first_name'],
            "last_name"=>$info['last_name'],
            "number_phone"=>$info['number_phone']
        );
        }
    }
    public function __toString()
    {

    }
}
?>