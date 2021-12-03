<?php
require_once('../Modelo/especialidad.php');
require_once('../../metodos.php');

$ModeloEspecialidad=new especialidad();
//$ModeloPaciente->validateSession();
$ModeloEspecialidad=new Metodos();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
    <title>Registrar Especialidad</title>
  <link rel="stylesheet" type="text/css" href="../../assets/css/add.css">
  <link rel="icon" type="imgage/img" href="../../assets/img/salud.png">
   <script src="https://kit.fontawesome.com/08e676ebb1.js" crossorigin="anonymous"></script>
  </head>
  <body>
<div class="container-all">
  <div class="container">

    <div class="volver"><a href="../Vista/especialidad.php"><i class="fas fa-arrow-left"></i></a></div>
        <h1 class="tittle">Registrar Especialidad</h1>
        <form action="../Controlador/add.php" class="formulario" method="POST">

        <input type="hidden" class="input" name="idEspecialidad">
        <label class="title">Especialidad</label>
        <input type="text" class="input" name="nombreEspecialidad" required="">


         <label class="title">Estado</label>
           <select name="estadoEspecialidad">
             <option>Seleccionar</option>
             <option value="Activo">Activo</option>
             <option value="Inactivo">Inactivo</option>
           </select>

        
        <div class="button"><button type="submit">
        Registrar</button>
        </form>
        </div>
        </div>

  </body>
</html>
