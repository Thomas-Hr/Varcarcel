<?php 
	require_once('../Modelo/Paciente.php');
		if($_POST){
			$ModeloPaciente=new paciente();
			$idPC=$_POST['idPaciente'];
			$ModeloPaciente->delete($idPC);
		}else{
			header('Location:../Vista/pacientes.php');
	}

?>