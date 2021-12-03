<?php
 require_once ('../Modelo/Enfermedad.php');
 if($_POST){

 $ModeloEnfermedad=new enfermedad();
$idef=$_POST['idEF'];
$nombreef=$_POST['nombreEF'];
$estadoef=$_POST['estadoEF'];
    $ModeloEnfermedad->add($idef,$nombreef,$estadoef);
}else{
    header('Location:../Vista/enfermedad.php'); 
}
     ?>

     
