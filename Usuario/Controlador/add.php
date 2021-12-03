<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<body>

<?php
 require_once ('../Modelo/Usuario.php');
 

try{
if($_POST){
 $ModeloUsuarios=new Usuario();
 $id=null; 
$Usernom=$_POST['nombreUser'];
$Userapellido=$_POST['apellidoUser'];
$tipoDoc=$_POST['tipoDocumento'];
$NumDoc=$_POST['NumDocumento'];
$FechaNac=$_POST['FechaNacimiento'];
$userCorreo=$_POST['correoUser'];
$UserEstado=null;


$pass = substr( md5(microtime()), 1, 10);

$tel=$_POST['telefono'];
$Userdireccion=$_POST['direccionUser'];
$tipoRol=$_POST['tipoRol'];
   
    $ModeloUsuarios->add($id, $Usernom, $Userapellido, $tipoDoc, $NumDoc,
    $FechaNac, $userCorreo, $pass, $tel, $Userdireccion,
    $UserEstado, $tipoRol);


}else{
echo '<script>
    alert("El mensaje se envio correctamente");
    window.history.go(-1);
    </script>';
   
}
}catch (PDOException $statement) {
  // $err=$_POST['NumDocumento'];
  // $statement=$err; 
  //   echo '<script> 
  //   alert(`El mensaje no se envio correctamente verifica los datos- Error`. $statement);
  //   window.history.go(-1);
  //   </script>';
  //  print('Errormessage '. $statement);

?>
   
<script> 
  Swal.fire({

    icon: 'error',
    title: 'Oops...',
    text: `Lo sentimos, parece ser que el número de documento o el correo electronico ya estan registrados en el sistema.` ,
    confirmButtonText: ' Volver ',
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
      window.history.go(-1)
    }
  })
 
  </script>
  
<?php
}
?>

  
</body>
</html>


