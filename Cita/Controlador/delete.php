<?php 
	 require_once ('../Modelo/Cita.php');
		if($_POST){
			$ModeloCita=new cita();
			$idCT=$_POST['idCita'];
			$ModeloCita->delete($idCT);
		}else{
			header('Location:../../index.php');
	}

?>