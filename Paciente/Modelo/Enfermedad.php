<?php

require_once('../../conexion.php');
require_once('../../Usuario/Modelo/Usuario.php');


class Enfermedad_Paciente extends conexion {

  public function __construct(){
    $this->db=parent::__construct();
  }
  public function getdb(){
    return $this->db;
  }


    public function getProceso(){
      $rows=null;
      $statement=$this->db->prepare("CALL PacienteEnfermedad();");
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

}



?>
