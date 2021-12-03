<?php
require_once('../Modelo/Enfermedad.php');
require_once('../../metodos.php');
$ModeloEnfermedad=new enfermedad();
$ModeloEF=new enfermedad();
 $paginas=new enfermedad();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--Paginado-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--Fin del Paginado-->

<title>Gestión de Enfermedad</title>
<link rel="icon" type="imgage/img" href="../../assets/img/salud.png">
<!--<Estilos>-->
<link rel="stylesheet" href="../../assets/css/slider.css">
<link rel="stylesheet" href="../../assets/css/modal.css">
<link rel="stylesheet" href="../../assets/css/tabla.css">
<!--<Fin de Estilos>-->

<!--Iconos-->
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<script src="https://kit.fontawesome.com/08e676ebb1.js" crossorigin="anonymous"></script>
<!--FIn de Iconos-->
</head>
<body>
  <?php 
  if (!$_GET) {
     header('Location:enfermedad.php?pagina=1');
  }
   ?>
  <div class="sidebar">
    <div class="logo_content">
      <div class="logo">
        <i class='bx bx-location-plus'></i>
        <div class="logo_name">Varcarcel</div>
      </div>
      <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav_list">
      <li>
          <i class='bx bx-search' ></i>
          <input type="text" placeholder="Search...">
        <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-grid-alt' ></i>
          <span class="links_name">Noticias</span>
        </a>
        <span class="tooltip">Noticias</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-calendar' ></i>
          <span class="links_name">Citas Medicas</span>
        </a>
        <span class="tooltip">Citas Medicas</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-calendar-plus'></i>
          <span class="links_name">Solicitar Cita</span>
        </a>
        <span class="tooltip">Solicitar Cita</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-blanket'></i>
          <span class="links_name">Historial Clínico</span>
        </a>
        <span class="tooltip">Historial</span>
      </li>
      <li>
        <a href="../../Usuario/Vista/index.php">
          <i class='bx bx-user-pin'></i>
          <span class="links_name">Usuarios</span>
        </a>
        <span class="tooltip">Usuarios</span>
      </li>
    
      <li>
        <a href="#">
          <i class='bx bx-user' ></i>
          <span class="links_name">Administradores</span>
        </a>
        <span class="tooltip">Admin</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-donate-heart' ></i>
          <span class="links_name">Fisioterapeutas</span>
        </a>
        <span class="tooltip">Doctores</span>
      </li>
     <li>
        <a href="../../Paciente/Vista/pacientes.php">
          <i class='bx bx-accessibility' ></i>
          <span class="links_name">Pacientes</span>
        </a>
        <span class="tooltip">Pacientes</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="links_name">Configuración</span>
        </a>
        <span class="tooltip">Configuración</span>
      </li>
    </ul>
    <div class="profile_content">
      <div class="profile">
        <div class="profile_details">
          <img src="../../assets/img/profile1.jpg" alt="">
          <div class="name_job">
            <div class="name">José Perez</div>
            <div class="job"><a href="#modal">Editar Perfil <i class='bx bx-edit-alt'></i></a></div>

          </div>

        </div>
        <a href="../../index.php" class="salir"><i class='bx bx-power-off' id="log_out" ></i></a>
      </div>

    </div>
  </div>

  <div class="home_content">
    <section>
      <h1 class="text">Gestión de Pacientes</h1>
       <div class="agregar">
      <a href="add.php">Nueva Enfermedad</a>
      </div>
      <br>
    <table  class="tabla">
      <tr class="columtr">
        <th class="izq">ID</th>
        <th>Nombre</th>
        <th> Estado </th>
        <th>Editar</th>
        <th class="dere">Eliminar</th>
        
      </tr>
        <?php

          $Enfermedad=$ModeloEF-> get();
           if ($Enfermedad !=null) {
              foreach ($Enfermedad as $ef) {
          

        ?>

       <tr class="columtrDatos">
        <td><?php echo $ef ['idEnfermedad']?></td>
        <td><?php echo $ef ['nombreEnfermedad']?></td>
        <td><?php echo $ef ['estadoEnfermedad']?></td>
      
        <td><a class="boton" href="edit.php?id=<?php echo $ef['idEnfermedad'] ?>"/a><i class="far fa-edit"> 
        </i></td>
        <td><a class="boton" href="delete.php?id=<?php echo $ef['idEnfermedad'] ?>"/a><i class="far fa-trash-alt">
        </i></td>
      </tr>

      <?php
         
}
        }
      ?>
    
    </table>
<nav aria-label="...">
  <ul class="pagination">
   
    </li>
       <?php 
      $Pg=$paginas-> pg();
          // if ($Pg !=null) {
       //foreach ($Pg as $pagi) 
  echo "</li>
  </ul>
  </nav>";
?>
  
   

   
    </section>

        <div class="container-all" id="modal">
        <div class="popup">
        <div class="img"><img src="../../assets/img/profile1.jpg"></div>
        <div class="container-text">
        <h1>Datos Personales</h1>
        <form action="#" class="#" method="#">

        <input type="hidden" class="input" name="idUsuario">

        <label class="title">Nombre</label>
        <input type="text" class="input" name="nombreUser" required="">

        <label class="title">Apellido</label>
        <input type="text" class="input" name="apellidoUser" required="">
        
        <label class="title">Tipo de Documento:</label>
        <select name="tipoDocumento" required="">
        <option>Cédula de Ciudadanía</option>
        <option>Tarjeta de identidad</option>
        <option>Cédula de extranjería</option>
        <option>Pasaporte</option>
        <option>Documentación nacional de identificación</option>
        <option>Número de identificación tributaria</option>

        </select>

        <label class="title">N° Documento:</label>
        <input type="text" class="input" name="NumDocumento" required="">
      
        <label class="title">Fecha de Nacimiento:</label>
        <input type="date" class="input" name="FechaNacimiento" required="">

        <label class="title">Correo electrónico:</label>
        <input type="email" class="input" name="telefono" required="">

        <label class="title">Télefono:</label>
        <input type="number" class="input" name="direccionUser" required="">

        <label class="title">Dirección:</label>
        <input type="text" class="input" name="direccionUser" required="">
        
        <div class="button"><button type="submit">
        Actualizar Datos</button>
        </form>
        </div>
        </div>

            
            <a href="#" class="btn-close-popup">X</a>
        
       </div>
</div>

<!--//////Agregar Usuario/////-->
<div class="container-all" id="agregar">
        <div class="popup">
        <div class="img"><img src="../../assets/img/profile1.jpg"></div>
        <div class="container-text">
        <h1>Datos Personales</h1>
        <form action="#" class="#" method="#">

        <input type="hidden" class="input" name="idUsuario">

        <label class="title">Nombre</label>
        <input type="text" class="input" name="nombreUser" required="">

        <label class="title">Apellido</label>
        <input type="text" class="input" name="apellidoUser" required="">
        
        <label class="title">Tipo de Documento:</label>
        <select name="tipoDocumento" required="">
        <option>Cédula de Ciudadanía</option>
        <option>Tarjeta de identidad</option>
        <option>Cédula de extranjería</option>
        <option>Pasaporte</option>
        <option>Documentación nacional de identificación</option>
        <option>Número de identificación tributaria</option>

        </select>

        <label class="title">N° Documento:</label>
        <input type="text" class="input" name="NumDocumento" required="">
      
        <label class="title">Fecha de Nacimiento:</label>
        <input type="date" class="input" name="FechaNacimiento" required="">

        <label class="title">Correo electrónico:</label>
        <input type="email" class="input" name="telefono" required="">

        <label class="title">Télefono:</label>
        <input type="number" class="input" name="direccionUser" required="">

        <label class="title">Dirección:</label>
        <input type="text" class="input" name="direccionUser" required="">
        
        <div class="button"><button type="submit">
        Actualizar Datos</button>
        </form>
        </div>
        </div>

            
            <a href="#" class="btn-close-popup">X</a>
        
       </div>
</div>

    </div>
  
    

  
       
  
  <script>
   let btn = document.querySelector("#btn");
   let sidebar = document.querySelector(".sidebar");
   let searchBtn = document.querySelector(".bx-search");

   btn.onclick = function() {
     sidebar.classList.toggle("active");
     if(btn.classList.contains("bx-menu")){
       btn.classList.replace("bx-menu" , "bx-menu-alt-right");
     }else{
       btn.classList.replace("bx-menu-alt-right", "bx-menu");
     }
   }
   searchBtn.onclick = function() {
     sidebar.classList.toggle("active");
   }
  </script>


</body>
</html>