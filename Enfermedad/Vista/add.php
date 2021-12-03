<?php
require_once('../Modelo/Enfermedad.php');
require_once('../../metodos.php');

$ModeloEnfermedad=new enfermedad();
//$ModeloPaciente->validateSession();
$ModeloEnfermedad=new Metodos();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
    <title>Registrar Enfermedad</title> 
  <link rel="stylesheet" type="text/css" href="../../assets/css/add.css">
  <link rel="icon" type="imgage/img" href="../../assets/img/salud.png">
   <script src="https://kit.fontawesome.com/08e676ebb1.js" crossorigin="anonymous"></script>

  </head>

  <body>
<div class="container-all">
  <div class="container">

    <div class="volver"><a href="../Vista/enfermedad.php"><i class="fas fa-arrow-left"></i></a></div>
        <h1 class="tittle">Registrar Enfermedad</h1>
        <form action="../Controlador/add.php" class="formulario" method="POST">


        <input type="hidden" class="input" name="idEF">

        <label class="title">Nombre Enfermedad</label>
        <input type="text" class="input" name="nombreEF" id="enfermedadesPadecidas" required="">

        <label class="title">Estado</label>
        <input type="text" class="input" name="estadoEF" required="">
    
        <div class="button"><button type="submit">
        Registrar</button>
        </form>
        </div>
        </div>

  </body>
</html>


