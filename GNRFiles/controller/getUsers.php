<?php
require_once '../cores/conexion.php';
//require '../cores/Utils.php';

$table = GetTable('clients');
echo ConvertToJson($table);
?>