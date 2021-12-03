<?php 
	 require_once ('../Modelo/Agenda.php');
		if($_POST){
			$ModeloAgenda=new Agenda();
			$idAg=$_POST['idAgenda'];
			$ModeloAgenda->delete($idAg);
		}else{
			header('Location:../Vista/Agenda.php');
	}

?>