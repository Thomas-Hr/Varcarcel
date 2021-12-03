<?php 
	require_once('../Modelo/Usuario.php');
		if($_POST){
			$ModeloUsuarios=new Usuario();
			$id=$_POST['idUsuario'];
			$ModeloUsuarios->delete($id);
		}else{
			header('Location: ../Vista/index.php');
	}

?> 