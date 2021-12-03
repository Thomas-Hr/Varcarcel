<?php 
	require_once('../Modelo/noticia.php');
		if($_POST){
			$ModeloNoticia=new noticia();
			$idNT=$_POST['idNoticia'];
			$ModeloNoticia->delete($idNT);
		}else{
			header('Location:../Vista/Noticias.php');
	}

?>