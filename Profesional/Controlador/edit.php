<?php
 require_once ('../Modelo/Profesional.php');
 if($_POST){
 $ModeloProfesional=new Profesional();

$idProfesionalFS=$_POST['idProfesional'];
$idUsuarioFKFS=$_POST['idUsuarioFK'];
$tarjetaProfesionalFS=$_POST['tarjetaProfesional'];
$HorasTFS=$_POST['HorasT'];
$idEspecialidadFKFS=$_POST['idEspecialidadFK'];
$estadoMedicoFS=$_POST['estadoMedico'];

$ModeloProfesional->update($idProfesionalFS,$estadoMedicoFS,$tarjetaProfesionalFS,$idUsuarioFKFS,$idEspecialidadFKFS,$HorasTFS);
}else{
    header('Location:../Vista/profesional.php'); 
}

     ?>



   