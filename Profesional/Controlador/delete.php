<?php 
	 require_once ('../Modelo/Profesional.php');
		if($_POST){
			$ModeloProfesional=new Profesional();
			$idFS=$_POST['idProfesional'];
			$ModeloProfesional->delete($idFS);
		}else{
			header('Location:../../index.php');
	}

?>