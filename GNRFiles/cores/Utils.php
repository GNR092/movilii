<?php
require_once 'conexion.php';
//require_once 'Clients.php';
require_once 'Users.php';

function Login($nick,$pass)
{
    
}
function GetTable($table)
{
    $link=conectar();
    $sql = "SELECT * FROM ".$table;
    $response =mysqli_query($link,$sql);
    
    return $response;
}
function ConvertToJson($table)
{
    $user = new UserInfo();
    $index = 0;
    while($info = $table->fetch_array(MYSQLI_BOTH))
    {
        $users[$index] = array(
            "UserID"=>$info['id_user'],
            "Nickname"=>$user->GetUserForID($info['id_user'])['nick'],
            "first_name"=>$info['first_name'],
            "last_name"=>$info['last_name'],
            "number_phone"=>$info['number_phone']
        );
        $index++;
    }
    if($users!=null)
    {
        return json_encode(new ArrayValue($users,128));
    }
    else
    {
        return json_encode(new ArrayValue(array("Error"=>"No hay clientes"),128));
    }
       
}
Class JsonObject
{
    var $Status;
    var $Error;
    public function __construct($status = "200") 
    {
        $this->Status = $status;
    }
}
class ArrayValue implements JsonSerializable 
{
    public function __construct(array $array) 
    {
        $this->array = $array;
    }

    public function jsonSerialize() 
    {
        return $this->array;
    }
}
?>