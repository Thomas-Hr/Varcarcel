<?php
require_once('../Modelo/Enfermedad.php');
require_once('../../metodos.php');
$ModeloEnfermedad=new enfermedad();

//$ModeloUsuarios->validateSession();
$ModeloMetodos=new Metodos();
$id=$_GET['id'];
$RegEnfermedad=$ModeloEnfermedad->getById($id);

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

    <div class="volver"><a href="../Vista/enfermedad.php"><i class="fas fa-arrow-left"></i></a></div>
        <h1 class="tittle">Editar Enfermedad</h1>
        <form action="../Controlador/edit.php" class="formulario" method="POST">

          <?php
          if($RegEnfermedad !=null){
            foreach ($RegEnfermedad as $datos) {
            
            ?>

      
         <input type="hidden" class="input" name="idEnfermedad" value ="<?php echo $datos['idEnfermedad'];?>">

        <label class="title">Nombre Enfermedad</label>
        <input type="text" class="input" name="nombreEnfermedad" required="" value ="<?php echo $datos['nombreEnfermedad'];?>">

        <label class="title">Estado enfermedad</label>
        <input type="text" class="input" name="estadoEnfermedad" required="" value ="<?php echo $datos['estadoEnfermedad'];?>">
  

      
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
 