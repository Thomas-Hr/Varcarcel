<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>error</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
<?php
 require_once ('../Modelo/Cita.php');

 try {
     //code...
 
 if($_POST){

 $ModeloCita=new cita();


    $idCTA=null;
    $contenidoCT=$_POST['contenido'];
    $fechaCitaCT=$_POST['fechaCita'];
    $estadoCitaCT=$_POST['estadoCita'];
    $idpacienteFKCT=$_POST['idpacienteFK'];
    $idProfesionalFKCT=$_POST['idProfesionalFK'];
    $idEspecialidadFKCT=$_POST['idEspecialidadFK'];
    $AsistenciaCT=$_POST['Asistencia'];
    // $regApartamento=$Modelo_Apartamento->getById($IdAp);
    // if($regApartamento!=null){
    //     header('Location:../Vista/add.php?Error="error"');


$ModeloCita->add($idCTA,$contenidoCT,$fechaCitaCT,$estadoCitaCT,$idpacienteFKCT,$idProfesionalFKCT,$idEspecialidadFKCT,
$AsistenciaCT);
 $statement=$ModeloCita->getdb();
}

else{
    header('Location:../Vista/Cita.php'); 
}
// $statement=$ModeloNoticia->getdb()->prepare("CALL proSelectNotVis();");
} catch (PDOException $statement) {
    // $err=$_POST['fechaCita'];
    // $statement=$err;
//     echo '<script>
//     alert(`El mensaje no se envio correctamente verifica los datos- Error`. $statement);
//     window.history.go(-1);
//     </script>';
// //    print('Errormessage '. $statement);

?>
<script>
    
		Swal.fire({

			icon: 'error',
			title: 'Oops...',
			text: `Lo sentimos, pero la fecha o la hora que trata de seleccionar ya esta en uso.` ,
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
   