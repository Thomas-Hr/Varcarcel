<?php
include('modelo.php');
$ModeloRecup=new recuperar();
if($_POST){
    $correo = $_POST['correo'];
    $pass = substr( md5(microtime()), 1, 10);
    $ModeloRecup->update($correo,$pass);
  
  }
?>