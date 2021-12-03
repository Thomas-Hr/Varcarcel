<?php

require_once('../../conexion.php');
require_once('../../Usuario/Modelo/Usuario.php');
require_once('../Modelo/Paciente.php');
require_once('../../Enfermedad/Modelo/Enfermedad.php');


class PacienteEnfermedad extends conexion {

  public function __construct(){
    $this->db=parent::__construct();
  }

  public function getdb(){
    return $this->db;
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
   
   public function getById($idPE){
     $rows=null;
     $statement=$this->db->prepare("CALL proSelectPEId(:id)");
     $statement->bindParam(':id',$idPE);
     $statement->execute();
     while ($result=$statement->fetch()){
          $rows[]=$result;
     }
     return $rows;
       }

    public function VistaPacienteEnfermedad(){
      $rows=null;
      $statement=$this->db->prepare("CALL proSelectVPE();");
      $statement->execute();
      while ($result=$statement->fetch()){
           $rows[]=$result;
      }
      return $rows;
        }

public function add($idPCFK,$idENFK,$idPE)
 {
  $statement=$this->db->prepare("CALL proInsertPE(:idPacienteFK,:idEnfermedadFK,:id);");
        $statement->bindParam(':idPacienteFK', $idPCFK);
        $statement->bindParam(':idEnfermedadFK', $idENFK);
        $statement->bindParam(':id', $idPE);
      if($statement->execute()){
    header('Location:../Vista/pacientes.php');
  }else{
    header('Location:../Vista/add.php');
  }
    }
    public function update($idPCFK,$idENFK,$idPE)
 {
  $statement=$this->db->prepare("CALL proInsertPE(:idPacienteFK,:idEnfermedadFK,:id);");
        $statement->bindParam(':idPacienteFK', $idPCFK);
        $statement->bindParam(':idEnfermedadFK', $idENFK);
        $statement->bindParam(':id', $idPE);
      if($statement->execute()){
    header('Location:../Vista/pacientes.php');
  }else{
    header('Location:../Vista/edit.php');
  }
}
      

       public function proEnfermedadXid($idPE){
        $rows=null;
        $statement=$this->db->prepare("CALL proEnfermedadXid(:id)");
        $statement->bindParam(':id',$idPE);
        $statement->execute();
        while ($result=$statement->fetch()){
             $rows[]=$result;
        }
        return $rows;
          }
            public function delete($idpac){
  $statement=$this->db->prepare("CALL proDeleteEnf(:id)");
  $statement->bindParam(':id',$idpac);
  if($statement->execute()){
    header('Location:../Vista/pacientes.php');
  }else{
    header('Location:../Vista/DeletePE.php');
  }

  }

        }

?>
