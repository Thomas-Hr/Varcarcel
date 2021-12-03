<?php
 require_once ('../Modelo/Paciente.php');
 require_once('../../Enfermedad/Modelo/Enfermedad.php');
 require_once('../Modelo/PacienteEnfermedad.php');
//  require_once('../../metodos.php');
 if($_POST){
 $ModeloPaciente=new paciente();
 $ModeloPacienteEnfermedad = new PacienteEnfermedad();
 $idPE=null;

$idPCFK=$_POST['idPacienteFK'];
if($idPCFK){
/*die(var_dump($_POST['idPacienteFK']));*/
// idPaciente IdEnfermedad
 foreach ($_POST['enfermedad'] as $idENFK) {

  $ModeloPacienteEnfermedad->add($idPCFK, $idENFK,$idPE);
 }
}else{
  echo ("Hubo un error");
}
 }

?>
    