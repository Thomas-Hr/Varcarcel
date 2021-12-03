<?php
require_once('../../conexion.php');

class Especialidad extends conexion {
  public function __construct(){
    $this->db=parent::__construct();
  }


    /*public function validateModuloCargoUsuario(){
    if($_SESSION['ID']!=null || $_SESSION['TIPO']=='Estudiante' || $_SESSION['TIPO']=='Docente'){
      header('Location:../../index.php');
    }
    }
    public function validateModuloEspecialidad(){
    if($_SESSION['ID']!=null || $_SESSION['TIPO']=='Estudiante' || $_SESSION['TIPO']=='Docente' ){
      header('Location:../../index.php');
    }
    }
    public function validateModuloCurso(){
    if($_SESSION['ID']!=null || $_SESSION['TIPO']=='Estudiante'){
      header('Location:../../index.php');
    }
    }
    public function validateModuloSalon(){
    if($_SESSION['ID']!=null || $_SESSION['TIPO']=='Estudiante' || $_SESSION['TIPO']=='Docente' ){
      header('Location:../../index.php');
    }
    }
    public function validateModuloMateria(){
    if($_SESSION['ID']!=null || $_SESSION['TIPO']=='Estudiante' || $_SESSION['TIPO']=='Docente' ){
      header('Location:../../index.php');
    }
    }
    public function validateModuloAsignacionCargo(){
    if($_SESSION['ID']!=null || $_SESSION['TIPO']=='Estudiante' || $_SESSION['TIPO']=='Docente' ){
      header('Location:../../index.php');
    }
    }
    public function validateModuloInasistencia(){
    if($_SESSION['ID']!=null || $_SESSION['TIPO']=='Estudiante'){
      header('Location:../../index.php');
    }
    }*/


public function add($idEsp, $nombreEspe, $estadoEsp)
 {
  $statement=$this->db->prepare("CALL proInsertEsp(:idEspecialidad,:nombreEspecialidad,:estadoEspecialidad);");
        $statement->bindParam(':idEspecialidad', $idEsp);
        $statement->bindParam(':nombreEspecialidad', $nombreEspe);
        $statement->bindParam(':estadoEspecialidad', $estadoEsp);
      if($statement->execute()){
    header('Location:../Vista/especialidad.php');
  }else{
    header('Location:../Vista/edit.php');
  }
    }


public function get(){
         $rows=null;
         $statement=$this->db->prepare("CALL proSelectEsp();");
         $statement->execute();
         while ($result=$statement->fetch()){
              $rows[]=$result;
         }
         return $rows;
           }
   
  

 
 public function getById($id){
  $rows=null;
  $statement=$this->db->prepare("CALL proSelectEspId(:id)");
  $statement->bindParam(':id',$id);
  $statement->execute();
  while ($result=$statement->fetch()){
       $rows[]=$result;
  }
  return $rows;
    }
public function update($idEsp, $nombreEspe, $estadoEsp)
 {
  $statement=$this->db->prepare("CALL proUpdateEsp(:idEsp,:nombreEspecialidadEsp,:estadoEspecialidadEsp);");
        $statement->bindParam(':idEsp', $idEsp);
        $statement->bindParam(':nombreEspecialidadEsp', $nombreEspe);
        $statement->bindParam(':estadoEspecialidadEsp', $estadoEsp);
      if($statement->execute()){
    header('Location:../Vista/especialidad.php');
  }else{
    header('Location:../Vista/edit.php');
  }
    }
    public function delete($idEsp){
  $statement=$this->db->prepare("CALL proDeleteEsp(:idEspecialidad)");
  $statement->bindParam(':idEspecialidad',$idEsp);
  if($statement->execute()){
    header('Location:../Vista/especialidad.php');
  }else{
    header('Location:../Vista/delete.php');
  }

  }

}



?>
