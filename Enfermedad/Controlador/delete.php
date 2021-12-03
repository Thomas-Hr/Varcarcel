<?php 
	require_once('../Modelo/Enfermedad.php');
		if($_POST){
			$ModeloEnfermedad=new enfermedad();
			$idEF=$_POST['idEnfermedad'];
			$ModeloEnfermedad->delete($idEF);
		}else{
			header('Location:../Vista/enfermedad.php');
	}

?>

