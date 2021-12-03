<?php
require_once('../Modelo/Paciente.php');
require_once('../../metodos.php');
$ModeloPaciente=new paciente();
$ModeloPC=new paciente();
 $paginas=new paciente();

?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Icono de Pestaña y titulo -->
<title>Historia Clínica</title>
<link rel="icon" type="imgage/img" href="../../assets/img/logob.png">
<!-- Fin del icono de pestaña y titulo-->

<!--datables Css Basicos-->
<link rel="stylesheet" type="text/css" href="../../assets/datatables/datatables.min.css"/>
<!--Fin del Datatable-->

<!--datables estilo bootstrap 5 CSS-->
<link rel="stylesheet" href="../../assets/css/bootstrap-5.1.0-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../../assets/css/bootstrap-5.1.0-dist/css/bootstrap.css">
<link rel="stylesheet" href="../../assets/css/header.css">
<!--Fin del Bootstrap-->
</head>
<body>
  <header class="p-4 text-white">
  <div class="container">
  <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
       <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <img class="bi me-2" width="50" height="50" src="../../assets/img/logob.png">
          <span class="fs-4 text-dark">Varcarcel</span>
       </a>

       <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
           <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
           <li><a href="#" class="nav-link px-2 text-dark">Features</a></li>
           <li><a href="#" class="nav-link px-2 text-dark">Pricing</a></li>
           <li><a href="#" class="nav-link px-2 text-dark">FAQs</a></li>
           <li><a href="#" class="nav-link px-2 text-dark">About</a></li>
       </ul>

  <div class="dropdown">
       <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown">Perfil Usuario
       <span class="caret"></span></button>
       <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Editar Perfil</a></li>
          <li><a class="dropdown-item" href="../../index.php">Cerrar Sesión</a></li>
       </ul>
  </div>

  </div>
  </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <h4 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Menu</span>
            </h4>

            <?php
            if ($_SESSION['TIPO']==null) {
              header('Location:../index.php');
            } elseif ($_SESSION['TIPO']=="Administrador"){
            ?>
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <span data-feather="shopping-cart"></span>
                Gestion Usuarios
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="users"></span>
                Gestión de Citas Médicas
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="bar-chart-2"></span>
                Historial Clínico
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="layers"></span>
                Administradores
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../Profesional/Vista/profesional.php">
                <span data-feather="layers"></span>
                Fisioterapeutas
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../Paciente/Vista/pacientes.php">
                <span data-feather="layers"></span>
                Pacientes
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../Noticia/vista/noticias.php">
                <span data-feather="layers"></span>
                Gestion de Noticias
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="../../Noticia/vista/index.php">
                <span data-feather="layers"></span>
                Noticias
              </a>
            </li>
            <?php
            } elseif ($_SESSION['TIPO']=="Fisioterapeuta"){
            ?>
            <li class="nav-item">
              <a class="nav-link" href="../../Noticia/vista/index.php">
                <span data-feather="layers"></span>
                Noticias
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="layers"></span>
                Citas Medicas
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="layers"></span>
                Pacientes
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="layers"></span>
                Historial Clínico
              </a>
            </li>
            <?php
              } elseif ($_SESSION['TIPO']=="Paciente"){
              ?>
              <li class="nav-item">
                <a class="nav-link" href="../../Noticia/vista/index.php">
                  <span data-feather="layers"></span>
                  Noticias
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Citas Médicas
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Solicitar Cita
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                   Consultar Historial Clínico
                </a>
              </li>
              <?php
                }
                ?>
          </ul>

    </div>
    </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

         <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

           <h1 class="h2">Historia Clínica:</h1>

         </div>
         <div class="table-responsive">
           <!-- <div class="m-2">

             <a href="add.php" class="btn btn-primary btn-sm" role="button" data-bs-toggle="button">Nuevo Paciente</a>
           </div> -->
           <table id="example" class="table table-striped table-bordered" style="width:100%">
           <thead>
               <tr>
        <th>Id Paciente</th>
        <th>Peso</th>
        <th>Estatura</th>
        <th>Antecedentes Familiares</th>
        <th>Enfermedades Padecidas</th>
        <th>Nombre Completo</th>
        <th>Tipo Documento</th>
        <th>Numero de documento</th>
        <th>Fecha de nacimiento</th>
        <th>Enfermedades</th>

               </tr>
             </thead>
                  <?php

          $Paciente=$ModeloPC-> getHistoriaCli();
           if ($Paciente !=null) {
              foreach ($Paciente as $paciente) {


        ?>
               <tr>
            <td><?php echo $paciente ['idPaciente']?></td>
            <td><?php echo $paciente ['peso']?></td>
            <td><?php echo $paciente ['estatura']?></td>
            <td><?php echo $paciente ['antecedentesFamiliares']?></td>
            <td><?php echo $paciente ['enfermedadesPadecidas']?></td>
            <td><?php echo $paciente ['Nombre']?></td>
            <td><?php echo $paciente ['tipoDocumento']?></td>
            <td><?php echo $paciente ['NumDocumento']?></td>
            <td><?php echo $paciente ['FechaNacimiento']?></td>
            <td><?php echo $paciente ['nombreEnfermedad']?></td>
              <!--    <td><a class="btn btn-warning" href="edit.php?id=?php echo $not['idPaciente']?>"/a>Editar
                </td>
                 <td><a class="btn btn-danger" href="delete.php?id=?php echo $not['idPaciente'] ?>"/a>Eliminar</td>
               </tr> -->
               <?php

           }
                 }
               ?>

             </tbody>
             </table>
         </div>



       </main>
     </div>
   </div>

   <!-- jQuery, Popper.js, Bootstrap JS -->
   <script src="../../assets/jquery/jquery-3.3.1.min.js"></script>

   <script src="../../assets/css/bootstrap-5.1.0-dist/js/bootstrap.min.js"></script>

   <!-- datatables JS -->
   <script type="text/javascript" src="../../assets/datatables/datatables.min.js"></script>
   <script type="text/javascript" src="../../assets/main.js"></script>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
