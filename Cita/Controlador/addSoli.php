<?php
 require_once ('../Modelo/Cita.php');
 if($_POST){
 $ModeloCita=new cita();
    $idCT=null;
    $idpacienteFKCT=$_POST['id'];
    $idEspecialidadFKCT=$_POST['especialidad'];
    $fechaCitaCT=date('Y-m-d H:i:s');
    
$ModeloCita->addd($idCT,Null,$fechaCitaCT,Null,$idpacienteFKCT,Null,$idEspecialidadFKCT,
Null);
}else{
    header('Location:../Vista/Cita.php'); 
}

?>


   