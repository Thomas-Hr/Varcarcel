<?php

require_once('../../conexion.php');
require_once('../../Usuario/Modelo/Usuario.php');


class paciente extends conexion {

  public function __construct(){
    $this->db=parent::__construct();
  }
  public function getdb(){
    return $this->db;
  }
  public function pacinteId(){
    $statement = $this->db->prepare("SELECT * FROM  paciente");
    $statement->execute();
    if ($statement->rowCount()==1){
      $result=$statement->fetch();
    $_SESSION['ID']=$result['idPaciente'];
    return true;
    }
    return false;
  }
  public function getid(){
    return $_SESSION['ID'];
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

    public function getById($id){
     $rows=null;
     $statement=$this->db->prepare("CALL proSelectPCId(:id)");
     $statement->bindParam(':id',$id);
     $statement->execute();
     while ($result=$statement->fetch()){
          $rows[]=$result;
     }
     return $rows;
       }

        public function getHistoriaCli(){
      $rows=null;
      $statement=$this->db->prepare("CALL proHistoriCli();");
      $statement->execute();
      while ($result=$statement->fetch()){
           $rows[]=$result;
      }
      return $rows;
        }

       public function getpacientes(){
         $rows=null;
         $statement=$this->db->prepare("CALL VistaPacienteTTt();");
         $statement->execute();
         while ($result=$statement->fetch()){
              $rows[]=$result;
         }
         return $rows;
           }

           public function max(){
            $rows=null;
            $statement=$this->db->prepare("CALL Masy();");
            $statement->execute();
            while ($result=$statement->fetch()){
                 $rows[]=$result;
            }
            return $rows;
              }
   

public function add($idpc, $pesopc, $estaturapc, $estadopc, $antecedentesFamiliarespc, $idUsuarioFKpc)
 {
  $statement=$this->db->prepare("CALL proInsertPCC(:idPaciente,:peso,:estatura, :estadoPaciente, :antecedentesFamiliares, :idUsuarioFK);");
        $statement->bindParam(':idPaciente', $idpc);
        $statement->bindParam(':peso', $pesopc);
        $statement->bindParam(':estatura', $estaturapc);
        $statement->bindParam(':estadoPaciente', $estadopc);
        $statement->bindParam(':antecedentesFamiliares',$antecedentesFamiliarespc);
        $statement->bindParam(':idUsuarioFK',$idUsuarioFKpc);
      if($statement->execute()){
    header('Location:../Vista/addenfe.php');
  }else{
    header('Location:../Vista/add.php');
  }
    }


  

    public function addPE($idPCFK,$idENFK)
    {
     $statement=$this->db->prepare("CALL proInsertPE(:idPacienteFK,:idEnfermedadFK);");
           $statement->bindParam(':idPacienteFK', $idPCFK);
           $statement->bindParam(':idEnfermedadFK', $idENFK);
         if($statement->execute()){
       header('Location:../Vista/add.php');
     }else{
       header('Location:../Vista/edit.php');
     }
       }
   
          
public function update($idPC, $pesoPC, $estaturaPC, $estadoPacientePC, $antecedentesFamiliaresPC, $idUsuarioFKPC)
 {
  $statement=$this->db->prepare("CALL proUpdatePC(:idPaciente,:peso,:estatura, :estadoPaciente, :antecedentesFamiliares, :idUsuarioFK);");
        $statement->bindParam(':idPaciente', $idPC);
        $statement->bindParam(':peso', $pesoPC);
        $statement->bindParam(':estatura', $estaturaPC);
        $statement->bindParam(':estadoPaciente', $estadoPacientePC);
        $statement->bindParam(':antecedentesFamiliares',$antecedentesFamiliaresPC);
        $statement->bindParam(':idUsuarioFK',$idUsuarioFKPC);

      if($statement->execute()){
    header('Location:../Vista/pacientes.php');
  }else{
    header('Location:../Vista/edit.php');
  }
    }
    public function delete($idPC){
  $statement=$this->db->prepare("CALL proDeletePC(:idPaciente)");
  $statement->bindParam(':idPaciente',$idPC);
  if($statement->execute()){
    header('Location:../Vista/pacientes.php');
  }else{
    header('Location:../Vista/delete.php');
  }

  }

            }



?>
