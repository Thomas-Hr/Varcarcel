<?php

require_once('../Modelo/Usuario.php');

if($_POST){
   $Modelo=new Usuario();

  $Usuario=$_POST['Usuario'];
  $Clave=$_POST['Clave'];

 $Modelo->login($Usuario, $Clave);
 if($Modelo->login($Usuario, $Clave)){
  header('Location: ../Vista/index.php');
 }else{
  header('Location: ../../login.php');

 }
}else{
  header('Location: ../../index.php');
}
?>
