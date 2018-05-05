<?php
error_reporting(3);
require_once '../cores/Users.php';
require_once '../cores/Utils.php';
//se conecta a la base de datos
$nickname = "";
$password = "";
$time = date_create();
$firstName = "";
$lastName = "";
$numberPhone = "";
$User = new UserInfo();
$DB = new db();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


////////////////////////////////////////////////

    if($_GET['nickname'] == "")
    {
        echo "0";
        return;
    }
    else
    {

        $nickname = $_GET['nickname'];
        if($_GET['pass'] == "")
        {
            echo '1';
            return;
        }
        else
        {
            $password = $_GET['pass'];
            if($_GET['first_name'] == "")
            {
                echo '2';
                return;
            }
            else
            {
                $firstName = $_GET['first_name'];
                if($_GET['last_name'] == "")
                {
                   echo "3";
                   return;
                }
                else
                {
                    $lastName = $_GET['last_name'];
                    if($_GET['number_phone'] == "")
                    {
                        echo "4";
                        return;
                    }
                    else
                    {
                        $numberPhone = $_GET['number_phone'];
                    }
                }
            }
        }
    }


if(!$User->CheckAvaiableNick($nickname))
{
    if($User->Register($nickname,$password,$firstName,$lastName,$numberPhone))
    {
        echo json_encode(new ArrayValue(array("Message"=>"Success!!")));
    }
    else
    {
        echo json_encode(new ArrayValue(array("Error"=>"Lo sentimos a ocurrido un error")));
    }
}
else
{
    echo json_encode(new ArrayValue(array("Error"=>"El Nickname:".$nickname." ya existe.")));
}
?>
