<?php
 require_once ('../Modelo/Profesional.php');
 if($_POST){
 $ModeloProfesional=new Profesional();
$idProfesionalFs=NULL;
$idUsuarioFKFS=$_POST['idUsuarioFK'];
$tarjetaProfesionalFS=$_POST['tarjetaProfesional'];
$HorasTFS=$_POST['HorasT'];
$idEspecialidadFKFS=$_POST['idEspecialidadFK'];
$estadoMedicoFS=$_POST['estadoMedico'];

$ModeloProfesional->add($idProfesionalFs,$estadoMedicoFS,$tarjetaProfesionalFS,$idUsuarioFKFS,$idEspecialidadFKFS,$HorasTFS);
}else{
    header('Location:http://localhost/Varcarcel/Profesional/vista/profesional.php'); 
}

     ?>
   