<?php

require_once('../../conexion.php');

class noticia extends conexion{

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





    public function getNoticias(){
      $rows=null;
      $statement=$this->db->prepare("CALL proSelectNT();");
      $statement->execute();
      while ($result=$statement->fetch()){
           $rows[]=$result;
      }
      return $rows;
        }




public function getById($id){
  $rows=null;
  $statement=$this->db->prepare("CALL proSelectNTId(:id)");
  $statement->bindParam(':id',$id);
  $statement->execute();
  while ($result=$statement->fetch()){
       $rows[]=$result;
  }
  return $rows;
  }

  public function add($idNT,$tituloNT,$descripcionNT,$textoNT,$imagenNT,$FechaCreateNT)
 {
  $statement=$this->db->prepare("CALL proInsertNT(:idNoticia,:titulo,:descripcion,:texto, :imagen, :FechaCreate);");
        $statement->bindParam(':idNoticia', $idNT);
        $statement->bindParam(':titulo', $tituloNT);
        $statement->bindParam(':descripcion', $descripcionNT);
        $statement->bindParam(':texto', $textoNT);
        $statement->bindParam(':imagen', $imagenNT);
        $statement->bindParam(':FechaCreate',$FechaCreateNT);

      if($statement->execute()){
    header('Location:../Vista/Noticias.php');
  }else{
    header('Location:../Vista/add.php');
  }
    }

public function update($idNT,$tituloNT,$descripcionNT,$textoNT,$imagenNT,$FechaCreateNT)
 {
  $statement=$this->db->prepare("CALL proUpdateNT(:idNoticia,:titulo,:descripcion,:texto, :imagen, :FechaCreate);");
        $statement->bindParam(':idNoticia', $idNT);
        $statement->bindParam(':titulo', $tituloNT);
        $statement->bindParam(':descripcion', $descripcionNT);
        $statement->bindParam(':texto', $textoNT);
        $statement->bindParam(':imagen', $imagenNT);
        $statement->bindParam(':FechaCreate',$FechaCreateNT);

      if($statement->execute()){
    header('Location:../Vista/Noticias.php');
  }else{
    header('Location:../Vista/edit.php');
  }
    }
    public function delete($idnt){
  $statement=$this->db->prepare("CALL proDeleteNT(:idNoticia)");
  $statement->bindParam(':idNoticia',$idnt);
  if($statement->execute()){
    header('Location:../Vista/Noticias.php');
  }else{
    header('Location:../Vista/delete.php');
  }

  }

            }




?>
