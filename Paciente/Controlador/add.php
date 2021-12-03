<?php
 require_once ('../Modelo/Paciente.php');
 require_once('../../Enfermedad/Modelo/Enfermedad.php');
 require_once('../Modelo/PacienteEnfermedad.php');
 require('../../metodos.php');
 if($_POST){
 $ModeloPaciente=new paciente();
 $ModeloPacienteEnfermedad = new paciente();

// $Modelo=new metodos();


$idPC=NULL;
$pesoPC=$_POST['peso'];
$estaturaPC=$_POST['estatura'];
$estadoPacientePC=$_POST['estadoPaciente'];
$antecedentesFamiliaresPC=$_POST['antecedentesFamiliares'];
$idUsuarioFKPC=$_POST['idUsuarioFK'];

$ModeloPaciente->add($idPC,$pesoPC,$estaturaPC,$estadoPacientePC,$antecedentesFamiliaresPC,$idUsuarioFKPC);

}else{
    header('Location:../Vista/pacientes.php');
}
     ?>

<!-- //die(var_dump($_POST['enfermedad']));
// // idPaciente IdEnfermedad
// $idPCFK=$Modelo-> IDPE();

// die(var_dump($_POST['enfermedad']));
// idPaciente IdEnfermedad
// if($statement)
//  foreach ($_POST['enfermedad'] as $idENFK) {

//   $ModeloPacienteEnfermedad>addPE($idPCFK, $idENFK);
//  }
 
     -->

 <!-- sacar el foreachs de el if de paciente controlador     -->