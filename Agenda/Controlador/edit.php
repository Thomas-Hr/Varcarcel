<?php
 require_once ('../Modelo/Agenda.php');
 if($_POST){
 $ModeloAgenda=new Agenda();

$idAgendaAg=$_POST['idAgenda'];
$titleAg=$_POST['title'];
$DescripcionAg=$_POST['Descripcion'];
$HoraAg=$_POST['Hora'];
$idProfesionalFKAg=$_POST['idProfesionalFK'];

$ModeloAgenda->update($idAgendaAg,$titleAg,$DescripcionAg,$HoraAg,$idProfesionalFKAg);
}else{
    header('Location:../Vista/Agenda.php'); 
}

     ?>
