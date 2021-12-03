<?php 
	require_once('../Modelo/especialidad.php');
		if($_POST){
			$ModeloEspecialidad=new Especialidad();
			$idEsp=$_POST['idEspecialidad'];
			$ModeloEspecialidad->delete($idEsp);
		}else{
			header('Location:../Vista/especialidad.php');
	}

?>