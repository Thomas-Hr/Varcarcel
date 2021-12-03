<?php 
require_once('../Modelo/Enfermedad.php');
require_once('../../Metodos.php');
$ModeloEnfermedad=new enfermedad();
//$ModeloUsuarios->validateSession();
$id=$_GET['id'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
    <title>Eliminar Enfermedad</title> 
  <link rel="stylesheet" type="text/css" href="../../assets/css/delete.css">
  <link rel="icon" type="imgage/img" href="../../assets/img/salud.png">
   <script src="https://kit.fontawesome.com/08e676ebb1.js" crossorigin="anonymous"></script>

  </head>


  <body>
<div class="container-all">
  <div class="container">
  	 <div class="volver"><a href="../Vista/enfermedad.php"><i class="fas fa-arrow-left"></i></a></div>
	<h1 class="tittle">Eliminar Enfermedad</h1>
	<form method="POST" action="../Controlador/delete.php">
		<p>Está a  punto de eliminar este registro, desea continuar?</p>
		<input type="hidden" name="idEnfermedad" value="<?php echo $id; ?>">
		<div class="button"><button type="submit">
        Eliminar</button>
	</form>
</div>
</div>

  </body>
</html>

