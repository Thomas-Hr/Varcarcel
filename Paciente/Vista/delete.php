<?php 
require_once('../Modelo/Paciente.php');
require_once('../../Metodos.php');
$ModeloPaciente=new paciente();
//$ModeloUsuarios->validateSession();
$id=$_GET['id'];
?>
<?php
 if($_SESSION['ID']==null || $_SESSION['TIPO']!= "Administrador"){
	header('Location:../../index.php');

}?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
    <title>Eliminar Usuario</title> 
  <link rel="stylesheet" type="text/css" href="../../assets/css/delete.css">
  <link rel="icon" type="imgage/img" href="../../assets/img/salud.png">
   <script src="https://kit.fontawesome.com/08e676ebb1.js" crossorigin="anonymous"></script>

  </head>


  <body>
<div class="container-all">
  <div class="container">
  	 <div class="volver"><a href="../Vista/pacientes.php"><i class="fas fa-arrow-left"></i></a></div>
	<h1 class="tittle">Eliminar Usuario</h1>
	<form method="POST" action="../Controlador/delete.php">
		<p>Está a  punto de eliminar este registro, desea continuar?</p>
		<input type="hidden" name="idPaciente" value="<?php echo $id; ?>">
		<div class="button"><button type="submit">
        Eliminar</button>
	</form>
</div>
</div>

  </body>
</html>

