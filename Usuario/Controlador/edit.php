<?php
require_once('../modelo/Usuario.php');

if ($_POST){

$ModeloUsuarios=new Usuario ();
$id=$_POST['idUsuario'];
$Usernom=$_POST['nombreUser'];
$Userapellido=$_POST['apellidoUser'];
$tipoDoc=$_POST['tipoDocumento'];
$NumDoc=$_POST['NumDocumento'];
$FechaNac=$_POST['FechaNacimiento'];
$userCorreo=$_POST['correoUser'];
$passwordU=$_POST['contrasena'];
$tel=$_POST['telefono'];
$Userdireccion=$_POST['direccionUser'];
$UserEstado=$_POST['estadoUser'];
$tipoRol=$_POST['tipoRol'];

    $ModeloUsuarios->update($id, $Usernom, $Userapellido, $tipoDoc, $NumDoc,
    $FechaNac, $userCorreo, $passwordU, $tel, $Userdireccion,
    $UserEstado, $tipoRol);
}else{
	header('Location:../Vista/Usuario.php'); 
}
 	 ?>
