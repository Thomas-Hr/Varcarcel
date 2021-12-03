<?php
require_once('../Modelo/especialidad.php');
require_once('../../metodos.php');

$ModeloEspecialidad=new Especialidad();
//$ModeloUsuarios->validateSession();
$ModeloMetodos=new Metodos();
$id=$_GET['id'];
$RegEspecialidad=$ModeloEspecialidad->getById($id);

?>
<!DOCTYPE html>
<html lang="Es-es" dir="ltr">
  <head>
  <meta charset="utf-8">
    <title>Actualizar Usuario</title> 
  <link rel="stylesheet" type="text/css" href="../../assets/css/edit1.css">
  <link rel="icon" type="imgage/img" href="../../assets/img/salud.png">
   <script src="https://kit.fontawesome.com/08e676ebb1.js" crossorigin="anonymous"></script>

  </head>


  <body>
<div class="container-all">
  <div class="container">

    <div class="volver"><a href="../Vista/index.php"><i class="fas fa-arrow-left"></i></a></div>
        <h1 class="tittle">Editar Usuario</h1>
        <form action="../Controlador/edit.php" class="formulario" method="POST">

          <?php
          if($RegEspecialidad !=null){
            foreach ($RegEspecialidad as $datos) {
            ?>
      
         <input type="hidden" class="input" name="idEspecialidad" value ="<?php echo $datos['idEspecialidad'];?>">

        <label class="title">Especialidad</label>
        <input type="text" class="input" name="nombreEspecialidad" required="" value ="<?php echo $datos['nombreEspecialidad'];?>">

        <label class="title">Estado Especialidad</label>
        <select name="estadoEspecialidad" required="">
        <option>Seleccionar</option>
        <option  value="Activo">Activo</option>
        <option value="Inactivo">Inactivo</option>
        </select>
    
        <div class="button"><button type="submit">
        Actualizar</button></div>
        </form>
         <?php
            }
          }
          ?>
        </div>
        </div>


  </body>
</html>
 