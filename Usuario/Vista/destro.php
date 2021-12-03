<?php
require_once('../Modelo/Usuario.php');

$ModeloUsuarios=new Usuario();
$ModeloUsuarios->validateSession();
if($ModeloUsuarios != null ){
session_start();
$_SESSION=[];
session_destroy();
header('Location:../../index.php');
} else{

    echo  "Hubo un error ";
}

?>

