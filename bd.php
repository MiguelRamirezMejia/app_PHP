<?php

$servidor="localhost"; //aca en tal caso iria el dominio, o una ip
$baseDeDatos="app";
$usuario="root";//pendiente revisar el usuario
$contrasenia="";

try {
    $conexion= new PDO("mysql:host=$servidor;dbname=$baseDeDatos",$usuario,$contrasenia); 
} catch (Exception $ex){
    echo $ex->getMessage();
}

?>