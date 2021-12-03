<?php  

require_once('../../conexion.php');
          

class enfermedad extends conexion {

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
 

public function add($idef, $nombreef, $estadoef)
 {
  $statement=$this->db->prepare("CALL proInsertEF(:idEnfermedad,:nombreEnfermedad,:estadoEnfermedad);");
        $statement->bindParam(':idEnfermedad', $idef);
        $statement->bindParam(':nombreEnfermedad', $nombreef);
        $statement->bindParam(':estadoEnfermedad', $estadoef);

      if($statement->execute()){
    header('Location:../Vista/enfermedad.php');
  }else{
    header('Location:../Vista/edit.php');
  }
    }


 public function get(){
    $rows=null;
    $statement=$this->db->prepare("CALL proSelectEF();");
    $statement->execute();
    while ($result=$statement->fetch()){
         $rows[]=$result;
    }
    return $rows;
      }
   
 public function getById($id){
  $rows=null;
  $statement=$this->db->prepare("CALL proSelectEFId(:id)");
  $statement->bindParam(':id',$id);
  $statement->execute();
  while ($result=$statement->fetch()){
       $rows[]=$result;
  }
  return $rows;
  }   
  public function update($idef, $nombreef, $estadoef)
  {
   $statement=$this->db->prepare("CALL proUpdateEF(:idEnfermedad,:nombreEnfermedad,:estadoEnfermedad);");
         $statement->bindParam(':idEnfermedad', $idef);
         $statement->bindParam(':nombreEnfermedad', $nombreef);
         $statement->bindParam(':estadoEnfermedad', $estadoef);
 
       if($statement->execute()){
     header('Location:../Vista/enfermedad.php');
   }else{
     header('Location:../Vista/edit.php');
   }
     }
    public function delete($idEF){
  $statement=$this->db->prepare("CALL proDeleteEF(:idEnfermedad)");
  $statement->bindParam(':idEnfermedad',$idEF);
  if($statement->execute()){
    header('Location:../Vista/enfermedad.php');
  }else{
    header('Location:../Vista/delete.php');
  }
    
  }
  
            }
        
  

?>