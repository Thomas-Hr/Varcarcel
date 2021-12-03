<?php
 require_once ('../Modelo/Enfermedad.php');
 if($_POST){
 $ModeloEnfermedad=new enfermedad();

$idEF=$_POST['idEnfermedad'];
$nombreEF=$_POST['nombreEnfermedad'];
$estadoEF=$_POST['estadoEnfermedad'];

    $ModeloEnfermedad->update($idEF,$nombreEF,$estadoEF);
}else{
    header('Location:../Vista/enfermedad.php'); 
}
     ?>


