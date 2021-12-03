<?php
 require_once ('../Modelo/Cita.php');
 if($_POST){
 $ModeloCita=new cita();
$idCT=$_POST['idCita'];
$contenidoCT=$_POST['contenido'];
$fechaCitaCT=$_POST['fechaCita'];
$estadoCitaCT=$_POST['estadoCita'];
$idpacienteFKCT=$_POST['idpacienteFK'];
$idProfesionalFKCT=$_POST['idProfesionalFK'];
$idEspecialidadFKCT=$_POST['idEspecialidadFK'];
$AsistenciaCT=$_POST['Asistencia'];

$ModeloCita->update($idCT,$contenidoCT,$fechaCitaCT,$estadoCitaCT,$idpacienteFKCT,$idProfesionalFKCT,$idEspecialidadFKCT,
$AsistenciaCT);
}else{
    header('Location:../Vista/add.php');
}

     ?>
