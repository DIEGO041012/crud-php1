<?php

$servidor="localhost";
$user="root";
$password="";
$basedatos="crud_php";

$conexion=new mysqli($servidor, $user, $password, $basedatos);//Ya la conexion esta lista

//Comprobar si existe algun error de conexion
if($conexion->connect_errno)//connect_errno verifica un error de conectividad
{
    echo "Nuestra conexion presenta fallas";
    exit();
}
?>