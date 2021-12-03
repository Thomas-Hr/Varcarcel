<?php 
	require_once('../Modelo/PacienteEnfermedad.php');
		if($_POST){
			$ModeloPacienteEnfermedad=new PacienteEnfermedad();
			$idpac=$_POST['id'];
			$ModeloPacienteEnfermedad->delete($idpac);
		}else{
			header('Location:../Vista/pacientes.php');
	}

?>