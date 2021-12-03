<?php 
require_once('../Modelo/especialidad.php');
require_once('../../metodos.php');
$ModeloEspecialidad=new Especialidad();
//$ModeloUsuarios->validateSession();
$id=$_GET['id'];
?>

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
  	 <div class="volver"><a href="../Vista/especialidad.php"><i class="fas fa-arrow-left"></i></a></div>
	      <h1 class="tittle">Eliminar Usuario</h1>
          <form method="POST" action="../Controlador/delete.php">
          <input type="hidden" class="input" name="id">
          <p>Está a  punto de eliminar este registro, desea continuar?</p>
          <input type="hidden" name="idEspecialidad" value="<?php echo $id;?>">
              <div class="button">
                <button type="submit">Eliminar</button>
              </div>
          </form>
      </div>
    </div>
  </div>
</div>

  </body>
</html>

