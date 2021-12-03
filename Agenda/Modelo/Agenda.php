<?php
require_once('../../conexion.php');

class Agenda extends conexion {

  public function __construct(){
    $this->db=parent::__construct();
}
  //  public function login($Usuario, $Clave){
  //     $statement = $this->db->prepare("SELECT * FROM  Usuario WHERE  correoUser=:Usuario AND contrasena=:Clave");
  //     $statement->bindParam(':Usuario',$Usuario);
  //     $statement->bindParam(':Clave',$Clave);
  //     $statement->execute();
  //     if ($statement->rowCount()==1){
  //       $result=$statement->fetch();
  //     $_SESSION['ID']=$result['idUsuario'];
  //     $_SESSION['ALIAS']=$result['nombreUser'];
  //     $_SESSION['ESTADO']=$result['estadoUser'];
  //     $_SESSION['TIPO']=$result['tipoRol'];
  //     $_SESSION['AP']=$result['apellidoUser'];
  //     $_SESSION['TD']=$result['tipoDocumento'];
  //     $_SESSION['Nu']=$result['NumDocumento'];
  //     $_SESSION['FN']=$result['FechaNacimiento'];
  //     $_SESSION['GM']=$result['correoUser'];
  //     $_SESSION['Tl']=$result['telefono'];
  //     $_SESSION['DR']=$result['direccionUser'];
  //     $_SESSION['PS']=$result['contrasena'];
  //     $_SESSION['ES']=$result['estadoUser'];
  //     $_SESSION['RL']=$result['tipoRol'];
  

  //     return true;
  //     }
  //     return false;
  //   }
    // public function getid(){
    // return $_SESSION['ID'];
    // }
    // public function getNombre(){
    //   return $_SESSION['ALIAS'];
    // }
    // public function getEstado(){
    //   return $_SESSION['ESTADO'];
    // }

    // public function getPerfil(){
    //   return $_SESSION['TIPO'];
    // }

    // public function getape(){
    //   return $_SESSION['AP'];
    // }
    
    // public function getTD(){
    //   return $_SESSION['TD'];
    // }

    // public function getNum(){
    //   return $_SESSION['Nu'];
    // }
    
    // public function getFN(){
    //   return $_SESSION['FN'];
    // }

    // public function getGMAIL(){
    //   return $_SESSION['GM'];
    // }
    // public function getTel(){
    //   return $_SESSION['Tl'];
    // }
    // public function getDir(){
    //   return $_SESSION['DR'];
    // }
    // public function getCon(){
    //   return $_SESSION['PS'];
    // }
    // public function getES(){
    //   return $_SESSION['ES'];
    // }
    // public function getRL(){
    //   return $_SESSION['RL'];
    // }
    
    
    // public function validateSession(){
    //   if($_SESSION['ID']==null){
    //     header('Location:../../index.php');
    // }
    // }

  
    // public function validateModuloCargoUsuario(){
    // if($_SESSION['ID']!=null || $_SESSION['TIPO']=='' || $_SESSION['TIPO']==''){
    //   header('Location:../../index.php');
    // }
    // }
    // public function validateModuloEspecialidad(){
    // if($_SESSION['ID']!=null || $_SESSION['TIPO']=='' || $_SESSION['TIPO']=='' ){
    //   header('Location:../../index.php');
    // }
    // }
    // public function validateModuloUsuarios(){
    // if($_SESSION['ID']!=null || $_SESSION['TIPO']==''){
    //   header('Location:../../index.php');
    // }
    // }
    // public function validateModuloNoticia(){
    // if($_SESSION['ID']!=null || $_SESSION['TIPO']=='' || $_SESSION['TIPO']=='' ){
    //   header('Location:../../index.php');
    // }
    // }
    // public function validateModuloEnfermedad(){
    // if($_SESSION['ID']!=null || $_SESSION['TIPO']=='' || $_SESSION['TIPO']=='' ){
    //   header('Location:../../index.php');
    // }
    // }
    // public function validateModuloAsignacionRol(){
    // if($_SESSION['ID']!=null || $_SESSION['TIPO']=='' || $_SESSION['TIPO']=='' ){
    //   header('Location:../../index.php');
    // }
    // }
    // public function validateModuloCitas(){
    // if($_SESSION['ID']!=null || $_SESSION['TIPO']==''){
    //   header('Location:../../index.php');
    // }
    // }


public function add( $idAgendaAg, $titleAg, $descripcionAg, $HoraAg, $idProfesionalFKAg)
 {
  $statement=$this->db->prepare("CALL proInsertAg(:idAgenda,:title, :descripcion, :Hora, :idProfesionalFK);");
        $statement->bindParam(':idAgenda', $idAgendaAg);
        $statement->bindParam(':title', $titleAg);
        $statement->bindParam(':descripcion', $descripcionAg);
        $statement->bindParam(':Hora',$HoraAg);
        $statement->bindParam(':idProfesionalFK',$idProfesionalFKAg);
      if($statement->execute()){
    header('Location:../Vista/Agendadm.php');
  }else{
    header('Location:../Vista/Agenda.php');
  }
    }



  public function get(){
    $rows=null;
    $statement=$this->db->prepare("CALL proSelectAg();");
    $statement->execute();
    while ($result=$statement->fetch()){
         $rows[]=$result;
    }
    return $rows;
      }


 public function getById($id){
  $rows=null;
  $statement=$this->db->prepare("CALL proSelectAgId(:idAgenda)");
  $statement->bindParam(':idAgenda',$id);
  $statement->execute();
  while ($result=$statement->fetch()){
       $rows[]=$result;
  }
  return $rows;
    }

    public function update($idAgendaAg, $titleAg, $DescripcionAg, $HoraAg, $idProfesionalFKAg)
    {
     $statement=$this->db->prepare("CALL proUpdateAg(:idAgenda,:title, :Descripcion, :Hora, :idProfesionalFK);");
           $statement->bindParam(':idAgenda',$idAgendaAg);
           $statement->bindParam(':title', $titleAg);
           $statement->bindParam(':Descripcion', $DescripcionAg);
           $statement->bindParam(':Hora',$HoraAg);
           $statement->bindParam(':idProfesionalFK',$idProfesionalFKAg);
         if($statement->execute()){
       header('Location:../Vista/Agendadm.php');
     }else{
       header('Location:../Vista/Agenda.php');
     }
       }

       public function updatef($idAgendaAg, $titleAg, $DescripcionAg, $HoraAg, $idProfesionalFKAg)
       {
        $statement=$this->db->prepare("CALL proUpdateAg(:idAgenda,:title, :Descripcion, :Hora, :idProfesionalFK);");
              $statement->bindParam(':idAgenda',$idAgendaAg);
              $statement->bindParam(':title', $titleAg);
              $statement->bindParam(':Descripcion', $DescripcionAg);
              $statement->bindParam(':Hora',$HoraAg);
              $statement->bindParam(':idProfesionalFK',$idProfesionalFKAg);
            if($statement->execute()){
          header('Location:../Vista/Agendadm.php');
        }else{
          header('Location:../Vista/Agenda.php');
        }
          }

    public function delete($idAg){
  $statement=$this->db->prepare("CALL proDeleteAg(:idAgenda)");
  $statement->bindParam(':idAgenda',$idAg);
  if($statement->execute()){
    header('Location:../Vista/Agendadm.php');
  }else{
    header('Location:../Vista/Agenda.php');
  }

  }
  public function getFisio($idfisio){
    $rows=null;
    $statement=$this->db->prepare("CALL proSelectAgfisio(:idfisio);");
    $statement->bindParam(':idfisio',$idfisio);
    $statement->execute();
    while ($result=$statement->fetch()){
         $rows[]=$result;
    }
    return $rows;
      }

            }



?>
