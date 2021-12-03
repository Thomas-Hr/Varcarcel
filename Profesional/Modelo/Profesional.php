<?php  
require_once('../../conexion.php');
require_once('../../Usuario/Modelo/Usuario.php');

class Profesional extends conexion {
 
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
   

public function add($idProfesionalFs,$estadoMedicoFs,$tarjetaProfesionalFs,$idUsuarioFKFs,$idEspecialidadFKFs,$HorasTFS)
 {
  $statement=$this->db->prepare("CALL proInsertFS(:idProfesional,:estadoMedico, :tarjetaProfesional, :idUsuarioFK, :idEspecialidadFK, :HorasT);");
        $statement->bindParam(':idProfesional',$idProfesionalFs);
        $statement->bindParam(':estadoMedico',$estadoMedicoFs);
        $statement->bindParam(':tarjetaProfesional',$tarjetaProfesionalFs);
        $statement->bindParam(':idUsuarioFK',$idUsuarioFKFs);
        $statement->bindParam(':idEspecialidadFK',$idEspecialidadFKFs);
        $statement->bindParam(':HorasT',$HorasTFS);
      if($statement->execute()){
    header('Location:../Vista/profesional.php');
  }else{
    header('Location:../Vista/add.php');
  }
}


public function getById($id){
  $rows=null;
  $statement=$this->db->prepare("CALL proSelectFSId(:id)");
  $statement->bindParam(':id',$id);
  $statement->execute();
  while ($result=$statement->fetch()){
       $rows[]=$result;
  }
  return $rows;
    }

   public function get(){
         $rows=null;
         $statement=$this->db->prepare("CALL proEspecialidadPro();");
         $statement->execute();
         while ($result=$statement->fetch()){
              $rows[]=$result;
         }
         return $rows;
           }



           public function getFisioCT(){
            $rows=null;
            $statement=$this->db->prepare("CALL getUProfesional();");
            $statement->execute();
            while ($result=$statement->fetch()){
                 $rows[]=$result;
            }
            return $rows;
              }

              public function FisioId(){
                $statement = $this->db->prepare("SELECT * FROM  Profesional");
                $statement->execute();
                if ($statement->rowCount()==1){
                  $result=$statement->fetch();
                $_SESSION['ID']=$result['idProfesional'];
                return true;
                }
                return false;
              }
              public function getid(){
                return $_SESSION['ID'];
                }
   
  
public function update($idProfesionalFS,$estadoMedicoFS,$tarjetaProfesionalFS,$idUsuarioFKFS,$idEspecialidadFKFS,$HorasTFS)
 {
  $statement=$this->db->prepare("CALL proUpdateFS(:idProfesional,:estadoMedico, :tarjetaProfesional, :idUsuarioFK, :idEspecialidadFK, :HorasT);");
        $statement->bindParam(':idProfesional',$idProfesionalFS);
        $statement->bindParam(':estadoMedico',$estadoMedicoFS);
        $statement->bindParam(':tarjetaProfesional',$tarjetaProfesionalFS);
        $statement->bindParam(':idUsuarioFK',$idUsuarioFKFS);
        $statement->bindParam(':idEspecialidadFK',$idEspecialidadFKFS);
        $statement->bindParam(':HorasT',$HorasTFS);
        if($statement->execute()){
          header('Location:../Vista/profesional.php');
        }else{
          header('Location:../Vista/edit.php');
        }
      }
      
 public function delete($idFS){
  $statement=$this->db->prepare("CALL proDeleteFS(:idProfesional)");
  $statement->bindParam(':idProfesional',$idFS);
  if($statement->execute()){
    header('Location:../Vista/profesional.php');
  }else{
    header('Location:../Vista/delete.php');
  }
    
  }
  
            }
?>
