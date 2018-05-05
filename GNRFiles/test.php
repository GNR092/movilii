<?php
require_once 'cores/Utils.php';
error_reporting(3);

$nickname = "";

$nickname = $_GET['nick'];


if($nickname == "" || $nickname == null)
{
    echo -1;
    return;
}
else
{
    $user = GetIDForUser($nickname);
    if($user!= -1)
    {
        echo $user;
    }
    else
    {
        echo -1;
    }
}
?>