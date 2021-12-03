<?php
 require_once ('../Modelo/especialidad.php');
 if($_POST){
 $ModeloEspecialidad=new Especialidad();
 $idEsp=$_POST['idEspecialidad'];
 $nombreEspe=$_POST['nombreEspecialidad'];
 $estadoEsp=$_POST['estadoEspecialidad'];
    $ModeloEspecialidad->update($idEsp,$nombreEspe,$estadoEsp);
}else{
    header('Location:../Vista/especialidad.php'); 
}
?>


