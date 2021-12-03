<?php
require_once('../../Enfermedad/Modelo/Enfermedad.php');
require_once('../Modelo/Paciente.php');
require_once('../../Usuario/Modelo/Usuario.php');
require_once('../../metodos.php');

$ModeloPaciente=new paciente();
// $ModeloPaciente->validateSession();
$ModeloPaciente=new Metodos();
$ModeloEnfermedad=new enfermedad();
?>
<?php
 if($_SESSION['ID']==null || $_SESSION['TIPO']!= "Administrador"){
	header('Location:../../index.php');

}?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../../assets/css/validaciones.css">
<!-- Icono de Pestaña y titulo -->
<title>Gestión de Usuarios</title>
<link rel="icon" type="imgage/img" href="../../assets/img/logob.png">
<!-- Fin del icono de pestaña y titulo-->

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
    <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
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

              </h5>

              <?php
              if ($_SESSION['TIPO']==null) {
                header('Location:../index.php');
              } elseif ($_SESSION['TIPO']=="Administrador"){
              ?>
              <li class="nav-item">
                <a class="nav-link" href="../../Usuario/vista/index.php">
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
      <h1 class="h2">Registrar Paciente:</h1>
      </div>

      <form action="../Controlador/add.php" class="row g-3" method="POST" >
            
      <input type="hidden" class="input" name="idPaciente">

            <!-- Grupo: Peso -->
            <div class="col-md-6" id="grupo__peso">
            <label for="peso" class="formulario__label">Peso:</label>
            <div class="formulario__grupo-input">
            <input type="text" class="formulario__input" name="peso" id="peso" placeholder="72kg">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">Solo se permiten Números.</p>
            </div>

            <!-- Grupo: Estatura -->
            <div class="col-md-6" id="grupo__estatura">
            <label for="estatura" class="formulario__label">Estatura:</label>
            <div class="formulario__grupo-input">
            <input type="text" class="formulario__input" name="estatura" id="estatura" placeholder="1.75">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">Solo se permiten Números.</p>
            </div>

            

            <!-- Grupo: Usuario -->
            <div class="col-md-6 " id="grupo__idUsuario">
            <label for="idUsuario" class="formulario__label">Usuario</label>
            <select   name="idUsuarioFK"  class="formulario__input">
            <option>Seleccione</option>
            <?php $USEREG=$ModeloPaciente->getUsuarioPaciente();
            if($USEREG !=null){
            foreach ($USEREG as $id){ ?>
            <option value="<?php echo $id['idUsuario']; ?>"><?php echo $id['nombreUser'];?></option>
            <br>
            <?php
                }
            }
            ?>
           </select>
           </div>

          <div class="col-md-6" id="grupo__estadoPaciente">
            <label for="estadoPaciente" class="formulario__label">Estado:</label>
            <div class="formulario__grupo-input">
              <select class="formulario__input" name="estadoPaciente" id="estadoPaciente" required="">
                <option>Seleccione...</option>
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
              </select>
              <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <!-- <p class="formulario__input-error">Solo se permiten letras.</p> -->
          </div>

          <!-- Grupo: Antecedentes familiares -->
          <div class="col-md-12" id="grupo__antecedentesFamiliares">
            <label for="antecedentesFamiliares" class="formulario__label">Antecedentes familiares:</label>
            <div class="formulario__grupo-input">
            <textarea class="form-control" name="antecedentesFamiliares" id="antecedentesFamiliares" placeholder="antecedentesFamiliares">
            </textarea>
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">Solo se permiten letras</p>
          </div>
        
          <button type="submit" class="btn btn-primary" >Registrar Paciente</button>
  
          </form>

          <hr>
       <form action="../controlador/addPE.php"  class="row g-3" method="POST" id="formulario">
          <div class="col-md-12" id="grupo__enfermedad">
            

          <?php  
          
         
  $idPCFK=$ModeloPaciente-> IDPE();
                    if ($idPCFK !=null) {
                        foreach ($idPCFK as $id) {
      
?>
            <input type="text" value="<?= $id['idPaciente'];?>" name="idPacienteFK">


       <?php
           }
          }
        ?>
                       

                
            <button type='button' id='addEnfermedad' class="btn btn-success">Añadir enfermedad</button>          
            <label for="" class="formulario__label">Enfermedad:</label>
            <div class="formulario__grupo-input">
                <select class="formulario__input" name="enfermedad[]" id="enfermedad" required="">
                  <option>Seleccione...</option>
                  <?php foreach($ModeloEnfermedad->get() as $Enfermedad): ?>
                    <option value="<?=$Enfermedad['idEnfermedad']?>"><?= $Enfermedad['nombreEnfermedad'];?></option>
                  <?php endforeach; ?>
                </select>
                <input type="hidden" value="">
          </div>
          <!-- <p class="formulario__input-error">Solo se permiten letras.</p> -->

          </div>
          
          
          <div class="formulario_grupo formulario_grupo-btn-enviar" id='btn-enviar'>
            <button type="submit" class="btn btn-primary">Registrar Enfermedad</button>
          </div>
         
                  </div>           
          

         </form>
          
       </main>
     </div>
   </div>



<!-- <script type="text/javascript" src="../../assets/js/validacionPC.js"></script> -->
<script>
  const btnEfermedad = document.querySelector('#addEnfermedad')
  btnEfermedad.addEventListener('click', function(){
    addPE()
  })

  function addPE(){
    const listEfermedad = document.createElement('div')
    listEfermedad.className = 'col-md-12'
    listEfermedad.innerHTML = `<label for="" class="formulario__label">Enfermedad:</label>
    <div class="formulario__grupo-input">
        <select class="formulario__input" name="enfermedad[]" id="enfermedad" required="">
          <option>Seleccione...</option>
          <?php foreach($ModeloEnfermedad->get() as $Enfermedad): ?>
            <option value="<?=$Enfermedad['idEnfermedad']?>"><?= $Enfermedad['nombreEnfermedad'];?></option>
          <?php endforeach; ?>
        </select>`;
    const btnEnviar = document.querySelector("#btn-enviar")
    const formulario = document.querySelector("#formulario")
    formulario.insertBefore(listEfermedad,btnEnviar)
  }

</script>
</body>
</html>