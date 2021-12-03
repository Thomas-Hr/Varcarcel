<?php
 require_once ('../Modelo/Agenda.php');
 if($_POST){
 $ModeloAgenda=new Agenda();

$titleAg=$_POST['title'];
$descripcionAg=$_POST['descripcion'];
$HoraAg=$_POST['Hora'];
$idProfesionalFKAg=$_POST['idProfesionalFK'];

$ModeloAgenda->add(null,$titleAg,$descripcionAg,$HoraAg,$idProfesionalFKAg);
}else{
    header('Location:../Vista/Agenda.php'); 
}

     ?>


   