<?php
require_once('../Modelo/Usuario.php');
require_once('../../metodos.php');

$ModeloUsuarios=new Usuario();
$ModeloUsuarios->validateSession();
$Modelo=new Usuario();
$Regusuario=new Usuario();
$ModeloUsuarios=new Metodos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Usuarios</title>
<link rel="icon" type="imgage/img" href="../../assets/img/logob.png">
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- FontAwesome JS-->
    <script defer src="../../assets/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
   <link id="theme-style" rel="stylesheet" href="../../assets/css/portal.css">
    <!-- Bootstrap 5 -->

    <link rel="stylesheet" href="../../assets/css/bootstrap-5.1.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap-5.1.0-dist/css/bootstrap.css">
    <!--datables Css Basicos-->
    <link rel="stylesheet" type="text/css" href="../../assets/datatables/datatables.min.css"/>
    <!--Fin del Datatable-->
    <link rel="stylesheet" href="../../assets/css/bootstrapEstilos.css">

</head>


<style>
td ,th{
	text-align: center;
}

p#badge_activo {
   background-color:  #095C7B;
   float: left;
   margin: 5px;
   width: 12px;
   height: 12px;
   border-radius: 50%;
}

p#badge_inactivo {
  background-color:  #A5382B;
  float: left;
  margin: 5px;
  width: 12px;
  height: 12px;
  border-radius: 50%;
}

</style>

<body class="app">
 <header class="app-header fixed-top">
        <div class="app-header-inner">
	        <div class="container-fluid py-2">
		        <div class="app-header-content">
		            <div class="row justify-content-between align-items-center">

				    <div class="col-auto">
					    <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
						    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
					    </a>
				    </div><!--//col-->
		            <div class="search-mobile-trigger d-sm-none col">
			            <i class="search-mobile-trigger-icon fas fa-search"></i>
			        </div><!--//col-->
		            <div class="app-search-box col">
		                <form class="app-search-form">
							<input type="text" placeholder="Search..." name="search" class="form-control search-input">
							<button type="submit" class="btn search-btn btn-primary" value="Search"><i class="fas fa-search"></i></button>
				        </form>
		            </div><!--//app-search-box-->

		            <div class="app-utilities col-auto">
			            <div class="app-utility-item app-notifications-dropdown dropdown">
				            <a class="dropdown-toggle no-toggle-arrow" id="notifications-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" title="Notifications">
					            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bell icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z"/>
  <path fill-rule="evenodd" d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
</svg>
					            <span class="icon-badge">3</span>
					        </a><!--//dropdown-toggle-->

					        <div class="dropdown-menu p-0" aria-labelledby="notifications-dropdown-toggle">
					            <div class="dropdown-menu-header p-3">
						            <h5 class="dropdown-menu-title mb-0">Notifications</h5>
						        </div><!--//dropdown-menu-title-->
						        <div class="dropdown-menu-content">
							       <div class="item p-3">
								        <div class="row gx-2 justify-content-between align-items-center">
									        <!--<div class="col-auto">
										       <img class="profile-image" src="assets/images/profiles/profile-1.png" alt="">
									        </div>//col-->
									        <div class="col">
										        <div class="info">
											        <div class="desc">Amy shared a file with you. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
											        <div class="meta"> 2 hrs ago</div>
										        </div>
									        </div><!--//col-->
								        </div><!--//row-->
								        <a class="link-mask" href="notifications.html"></a>
							       </div><!--//item-->
							       <div class="item p-3">
								        <div class="row gx-2 justify-content-between align-items-center">
									        <div class="col-auto">
										        <div class="app-icon-holder">
											        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-receipt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z"/>
	  <path fill-rule="evenodd" d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
	</svg>
										        </div>
									        </div><!--//col-->
									        <div class="col">
										        <div class="info">
											        <div class="desc">You have a new invoice. Proin venenatis interdum est.</div>
											        <div class="meta"> 1 day ago</div>
										        </div>
									        </div><!--//col-->
								        </div><!--//row-->
								        <a class="link-mask" href="notifications.html"></a>
							       </div><!--//item-->
							       <div class="item p-3">
								        <div class="row gx-2 justify-content-between align-items-center">
									        <div class="col-auto">
										        <div class="app-icon-holder icon-holder-mono">
											        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bar-chart-line" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"/>
</svg>
										        </div>
									        </div><!--//col-->
									        <div class="col">
										        <div class="info">
											        <div class="desc">Your report is ready. Proin venenatis interdum est.</div>
											        <div class="meta"> 3 days ago</div>
										        </div>
									        </div><!--//col-->
								        </div><!--//row-->
								        <a class="link-mask" href="notifications.html"></a>
							       </div><!--//item-->
							       <div class="item p-3">
								        <div class="row gx-2 justify-content-between align-items-center">
									        <!--<div class="col-auto">
										       <img class="profile-image" src="assets/images/profiles/profile-2.png" alt="">
									        </div>//col-->
									        <div class="col">
										        <div class="info">
											        <div class="desc">James sent you a new message.</div>
											        <div class="meta"> 7 days ago</div>
										        </div>
									        </div><!--//col-->
								        </div><!--//row-->
								        <a class="link-mask" href="notifications.html"></a>
							       </div><!--//item-->
						        </div><!--//dropdown-menu-content-->

						        <div class="dropdown-menu-footer p-2 text-center">
							        <a href="notifications.html">View all</a>
						        </div>

							</div><!--//dropdown-menu-->
				        </div><!--//app-utility-item-->
			            <div class="app-utility-item">
				            <a href="settings.html" title="Settings">
					            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
  <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
</svg>
					        </a>
					    </div><!--//app-utility-item-->

			            <div class="app-utility-item app-user-dropdown dropdown">
				            <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Mi Cuenta</a>
				            <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
								<li><a class="dropdown-item" href="account.php">Perfil</a></li>
								<li><a class="dropdown-item" href="settings.html">Configuración</a></li>
								<li><hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="../../index.php">Cerrar Sesión</a></li>
							</ul>
			            </div><!--//app-user-dropdown-->
		            </div><!--//app-utilities-->
		        </div><!--//row-->
	            </div><!--//app-header-content-->
	        </div><!--//container-fluid-->
        </div><!--//app-header-inner-->
        <?php
	 		if($_SESSION['TIPO']=== "Administrador"){
				 
		?>
             <div id="app-sidepanel" class="app-sidepanel"> 
	        <div id="sidepanel-drop" class="sidepanel-drop"></div>
	        <div class="sidepanel-inner d-flex flex-column">
		        <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
		        <div class="app-branding">
		            <a class="app-logo" href="index.php" style="text-decoration: none;"><img class="logo-icon me-2" src="../../assets/img/logob.png" alt="logo"><span class="logo-text">Varcarcel</span></a>
	
		        </div><!--//app-branding-->  
		        
			    <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
				    <ul class="app-menu list-unstyled accordion" id="menu-accordion">
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link" href="index.php">
						        <span class="nav-icon">
						        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
		  <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
		</svg>
						         </span>
		                         <span class="nav-link-text">Inicio</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					
					    
					    <li class="nav-item has-submenu">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link submenu-toggle active" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-1" aria-expanded="false" aria-controls="submenu-1">
						        <span class="nav-icon">
						        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
						        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z"/>
	  <path d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z"/>
	</svg>
						         </span>
		                         <span class="nav-link-text">Gestion de Usuarios:</span>
		                         <span class="submenu-arrow">
		                             <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
	</svg>
	                             </span><!--//submenu-arrow-->
					        </a><!--//nav-link-->
					        <div id="submenu-1" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
						        <ul class="submenu-list list-unstyled">
							         <li class="submenu-item"><a class="submenu-link active" href="usuario.php">Usuarios</a></li>
							        <li class="submenu-item"><a class="submenu-link" href="../../paciente/vista/pacientes.php">Pacientes</a></li>
							        <li class="submenu-item"><a class="submenu-link" href="../../Profesional/vista/profesional.php">Profesionales</a></li>
							        <li class="submenu-item"><a class="submenu-link" href="../../Noticia/vista/Noticias.php">Noticias</a></li>
						        </ul>
					        </div>
					    </li><!--//nav-item-->
					    <li class="nav-item has-submenu">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-2" aria-expanded="false" aria-controls="submenu-2">
						        <span class="nav-icon">
						        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
						        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-columns-gap" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M6 1H1v3h5V1zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12h-5v3h5v-3zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8H1v7h5V8zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6h-5v7h5V1zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z"/>
	</svg>
						         </span>
		                         <span class="nav-link-text">Gestiones Médicas:</span>
		                         <span class="submenu-arrow">
		                             <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
	</svg>
	                             </span><!--//submenu-arrow-->
					        </a><!--//nav-link-->
					        <div id="submenu-2" class="collapse submenu submenu-2" data-bs-parent="#menu-accordion">
						        <ul class="submenu-list list-unstyled">
							        <li class="submenu-item"><a class="submenu-link" href="../../Cita/vista/cita.php">Citas</a></li>
							        <li class="submenu-item"><a class="submenu-link" href="../../agenda/recordatorio.php">Agenda</a></li>
							        <!-- <li class="submenu-item"><a class="submenu-link" href="#">Historial Médico</a></li> -->
							        <li class="submenu-item"><a class="submenu-link" href="../../reportes/index.php">Reporte asistencia Médica</a></li>
						        </ul>
					        </div>
					    </li><!--//nav-item-->

					   
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link" href="#">
						        <span class="nav-icon">
						        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bar-chart-line" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"/>
	</svg>
						         </span>
		                         <span class="nav-link-text">Calendario</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					    
					  				    
				    </ul><!--//app-menu-->
			    </nav><!--//app-nav-->
			    <div class="app-sidepanel-footer">
				    <nav class="app-nav app-nav-footer">
					    <ul class="app-menu footer-menu list-unstyled">
						    <li class="nav-item">
						        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
						        <a class="nav-link" href="./account.php">
							        <span class="nav-icon">
							            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
	  <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
	</svg>
							        </span>
			                        <span class="nav-link-text">Perfil</span>
						        </a><!--//nav-link-->
						    </li><!--//nav-item-->
						    <li class="nav-item">
						        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
						        <a class="nav-link" href="https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/">
							    
			                       
						        </a><!--//nav-link-->
						    </li><!--//nav-item-->
					    </ul><!--//footer-menu-->
				    </nav>
			    </div><!--//app-sidepanel-footer-->
		       
	        </div><!--//sidepanel-inner-->
	    </div><!--//app-sidepanel-->

	 <?php
			 }elseif($_SESSION['TIPO'] === "Fisioterapeuta"){

		?>

<div id="app-sidepanel" class="app-sidepanel"> 
	        <div id="sidepanel-drop" class="sidepanel-drop"></div>
	        <div class="sidepanel-inner d-flex flex-column">
		        <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
		        <div class="app-branding">
		            <a class="app-logo" href="index.php" style="text-decoration: none;"><img class="logo-icon me-2" src="../../assets/img/logob.png" alt="logo"><span class="logo-text">Varcarcel</span></a>
	
		        </div><!--//app-branding-->  
		        
			    <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
				    <ul class="app-menu list-unstyled accordion" id="menu-accordion">
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link active" href="index.php">
						        <span class="nav-icon">
						        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
		  <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
		</svg>
						         </span>
		                         <span class="nav-link-text">Inicio</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					    
					    <li class="nav-item has-submenu">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-2" aria-expanded="false" aria-controls="submenu-2">
						        <span class="nav-icon">
						        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
						        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-columns-gap" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M6 1H1v3h5V1zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12h-5v3h5v-3zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8H1v7h5V8zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6h-5v7h5V1zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z"/>
	</svg>
						         </span>
		                         <span class="nav-link-text">Gestiones Médicas:</span>
		                         <span class="submenu-arrow">
		                             <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
	</svg>
	                             </span><!--//submenu-arrow-->
					        </a><!--//nav-link-->
					        <div id="submenu-2" class="collapse submenu submenu-2" data-bs-parent="#menu-accordion">
						        <ul class="submenu-list list-unstyled">
							        <li class="submenu-item"><a class="submenu-link" href="../../Cita/vista/cita.php">Citas</a></li>
							        <li class="submenu-item"><a class="submenu-link" href="../../agenda/recordatorio.php">Agenda</a></li>
							        <!-- <li class="submenu-item"><a class="submenu-link" href="#">Historial Médico</a></li> -->
						        </ul>
					        </div>
					    </li><!--//nav-item-->

					   
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link" href="charts.html">
						        <span class="nav-icon">
						        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bar-chart-line" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"/>
	</svg>
						         </span>
		                         <span class="nav-link-text">Calendario</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					    
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link" href="help.html">
						        
		                         
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->					    
				    </ul><!--//app-menu-->
			    </nav><!--//app-nav-->
			    <div class="app-sidepanel-footer">
				    <nav class="app-nav app-nav-footer">
					    <ul class="app-menu footer-menu list-unstyled">
						    <li class="nav-item">
						        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
						        <a class="nav-link" href="./account.php">
							        <span class="nav-icon">
							            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
	  <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
	</svg>
							        </span>
			                        <span class="nav-link-text">Perfil</span>
						        </a><!--//nav-link-->
						    </li><!--//nav-item-->
						    <li class="nav-item">
						        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
						        <a class="nav-link" href="https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/">
							    
			                       
						        </a><!--//nav-link-->
						    </li><!--//nav-item-->
					    </ul><!--//footer-menu-->
				    </nav>
			    </div><!--//app-sidepanel-footer-->
		       
	        </div><!--//sidepanel-inner-->
	    </div><!--//app-sidepanel-->
	 <?php
			 }elseif($_SESSION['TIPO'] === "Paciente"){
				  ?>
	      <div id="app-sidepanel" class="app-sidepanel"> 
	        <div id="sidepanel-drop" class="sidepanel-drop"></div>
	        <div class="sidepanel-inner d-flex flex-column">
		        <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
		        <div class="app-branding">
		            <a class="app-logo" href="index.php" style="text-decoration: none;"><img class="logo-icon me-2" src="../../assets/img/logob.png" alt="logo"><span class="logo-text">Varcarcel</span></a>
	
		        </div><!--//app-branding-->  
		        
			    <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
				    <ul class="app-menu list-unstyled accordion" id="menu-accordion">
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link active" href="index.php">
						        <span class="nav-icon">
						        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
		  <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
		</svg>
						         </span>
		                         <span class="nav-link-text">Inicio</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link" href="">
						        <span class="nav-icon">
								<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
  <circle cx="3.5" cy="5.5" r=".5"/>
  <circle cx="3.5" cy="8" r=".5"/>
  <circle cx="3.5" cy="10.5" r=".5"/>
</svg>
						         </span>
		                         <span class="nav-link-text">Mi Historia Clínica</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					    
					    
					    <li class="nav-item has-submenu">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-2" aria-expanded="false" aria-controls="submenu-2">
						        <span class="nav-icon">
						        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
						        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-columns-gap" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M6 1H1v3h5V1zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12h-5v3h5v-3zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8H1v7h5V8zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6h-5v7h5V1zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z"/>
	</svg>
						         </span>
		                         <span class="nav-link-text">Gestiones Médicas:</span>
		                         <span class="submenu-arrow">
		                             <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
	</svg>
	                             </span><!--//submenu-arrow-->
					        </a><!--//nav-link-->
					        <div id="submenu-2" class="collapse submenu submenu-2" data-bs-parent="#menu-accordion">
						        <ul class="submenu-list list-unstyled">
							        <li class="submenu-item"><a class="submenu-link" href="../../Cita/vista/cita.php">Solicitar Cita</a></li>
							        <li class="submenu-item"><a class="submenu-link" href="../../agenda/recordatorio.php">Agenda</a></li>
							        <!-- <li class="submenu-item"><a class="submenu-link" href="#">Historial Médico</a></li> -->						        </ul>
					        </div>
					    </li><!--//nav-item-->

					   
					    
					    
				    </ul><!--//app-menu-->
			    </nav><!--//app-nav-->
			    <div class="app-sidepanel-footer">
				    <nav class="app-nav app-nav-footer">
					    <ul class="app-menu footer-menu list-unstyled">
						    <li class="nav-item">
						        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
						        <a class="nav-link" href="account.php">
							        <span class="nav-icon">
							            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
	  <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
	</svg>
							        </span>
			                        <span class="nav-link-text">Perfil</span>
						        </a><!--//nav-link-->
						    </li><!--//nav-item-->
						    <li class="nav-item">
						        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
						        <a class="nav-link" href="https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/">
							    
			                       
						        </a><!--//nav-link-->
						    </li><!--//nav-item-->
					    </ul><!--//footer-menu-->
				    </nav>
			    </div><!--//app-sidepanel-footer-->
		       
	        </div><!--//sidepanel-inner-->
	    </div><!--//app-sidepanel-->


	 
	 			<?php
				 }
	  			 ?>
    </header><!--//app-header-->

    <div class="app-wrapper">

	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">

			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">Gestión Usuarios:</h1>
				    </div>

				<div class="tab-content" id="orders-table-tab-content">
			        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					    <div class="app-card app-card-orders-table shadow-sm mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive m-2">
                    <div class="m-2">
                         <!-- <button type="button" id="btnNuevo" class="btn botonNuevo" data-bs-toggle="modal" data-bs-target="#modal"></button> -->

						 <button type="button" id="btnNuevo" class="btn botonNuevo" data-bs-toggle="modal" data-bs-target="#modalAgregar"><i class="fas fa-plus"></i></button>
						 
						</div>
							        <table id="example" class="table app-table-hover mb-0 text-left">
                        <!-- <table id="example" class="table table-striped table-bordered" style="width:100%"> -->
                               <thead>
                               <tr>
                                   <th class="cell">ID</th>
                                   <th class="cell">Nombres</th>
                                   <th class="cell">Apellidos</th>
                                   <th class="cell">Tipo de Documento</th>
                                   <th class="cell">Número Documento</th>
                                   <!-- <th class="cell">Fecha de nacimiento</th>
                                   <th class="cell">Correo</th>
                                   <th class="cell">Teléfono</th>
                                   <th class="cell">Dirección</th> -->
                                   <th class="cell">Estado</th>
                                   <th class="cell">Rol</th>
                                   <th class="cell">Editar</th>
                                   <th class="cell">Eliminar</th>
                              </tr>
                              </thead>
                         <?php

                         $Usuario=$Modelo-> get();
                         if ($Usuario !=null) {
                         foreach ($Usuario as $usuario) {
                         ?>

                               <tr>
                                   <td class="cell"><?php echo $usuario ['idUsuario']?></td>
                                   <td class="cell"><?php echo $usuario ['nombreUser']?></td>
                                   <td class="cell"><?php echo $usuario ['apellidoUser']?></td>
                                   <td class="cell"><?php echo $usuario ['tipoDocumento']?></td>
                                   <td class="cell"><?php echo $usuario ['NumDocumento']?></td>
                                   <!-- <td>?php echo $usuario ['FechaNacimiento']?></td>
                                   <td>?php echo $usuario ['correoUser']?></td>
                                   <td>?php echo $usuario ['telefono']?></td>
                                   <td>?php echo $usuario ['direccionUser']?></td> -->


								 <?php
								 if ($usuario ['estadoUser'] !=null && $usuario ['estadoUser']==="Activo"){ ?>

									<td class="cell" ><p id="badge_activo" ></p><?php echo $usuario ['estadoUser']?></td>

								<?php
								}else{ ?>
									<td class="cell"><p id="badge_inactivo" ></p><?php echo $usuario ['estadoUser']?></td>

									<?php
								}?>
                                   <td class="cell"><?php echo $usuario ['tipoRol']?></td>





								   <td><button type="button"  class="btn botonEditar btn-sm" data-bs-toggle="modal" data-bs-target="#modal<?=$usuario['idUsuario']?>">Editar</button></td>
								   <td><button type="button"  class="btn botonBorrar btn-sm" data-bs-toggle="modal" data-bs-target="#modalBorrar<?=$usuario['idUsuario']?>">Inhabilitar</button></td>
                 </tr>


                 <!-- Modal Borrar-->
               <div class="modal fade" id="modalBorrar<?=$usuario['idUsuario']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog">
               <div class="modal-content">
               <div class="modal-header" style="background: #2C71B7;">
               <h5 class="modal-title" style="color: white;" id="exampleModalLabel">Inhabilitar usuario #<?php echo $usuario['idUsuario']; ?></h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
               <!-- Form -->
               <form action="../Controlador/delete.php" class="form" method="POST" >
               <input type="hidden" class="input" name="id">
               <p>Está a  punto de Inhabilitar a <strong>"<?php echo $usuario['nombreUser']." ".$usuario['apellidoUser']; ?>"</strong>, deseas continuar?
               <input type="hidden" name="idUsuario" value="<?php echo $usuario['idUsuario']; ?>">
               </p>

               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                 <button type="submit" class="btn btn-primary">Inhabilitar</button>
             </form>
             <!-- Cierre Form -->
               </div>
               </div>
               </div>
               </div>

                  <!-- Modal Editar-->
                  <div class="modal fade" id="modal<?=$usuario['idUsuario']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog  modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title"  id="exampleModalLabel">Editar Usuario #<?php echo $usuario['idUsuario']; ?></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
    <div class="modal-body">
    <!-- Form -->
    <form action="../controlador/edit.php" method="post" class="needs-validation" novalidate>
<input type="hidden" class="input" name="idUsuario" value ="<?php echo $usuario['idUsuario']; ?>">
    <div class="row">
      <div class="col">
      <!-- Grupo: Nombres -->
      <label for="nombreUser" class="form-label">Nombres:</label>
      <input type="text" class="form-control" name="nombreUser" placeholder="Jhonn Jairo" aria-label="Nombres" value ="<?php echo $usuario['nombreUser']; ?>" maxlength="40" pattern="[A-Za-z ]{1,40}" required="">
      <div class="valid-feedback">Se ve Bien!</div>
    <div class="invalid-feedback">No pueden haber numeros en este campo!</div>
      </div>

      <div class="col">
      <!-- Grupo: Apellidos -->
      <label for="apellidoUser" class="form-label">Apellidos:</label>
      <input type="text" class="form-control" name="apellidoUser" placeholder="Diaz Lozano" aria-label="Apellidos" value ="<?php echo $usuario['apellidoUser']; ?>" maxlength="40" pattern="[A-Za-z ]{1,40}" required="">
      </div>

    </div>

    <div class="row mt-4">
      <div class="col">
        <!-- Grupo: Numero de Documento -->
      <label for="NumDocumento" class="form-label">Número de documento:</label>
      <input type="text" class="form-control"  name="NumDocumento" placeholder="1024604999" value ="<?php echo $usuario['NumDocumento']; ?>" minlength="6" maxlength="10" pattern="[0-9]+" required="">
      </div>

      <div class="col">
      <!-- Grupo: tipo de Documento -->
      <label for="tipoDocumento" class="form-label">Tipo de documento:</label>
      <select class="form-select" name="tipoDocumento" required="">
            <option selected disabled value=""><?php echo $usuario['tipoDocumento']; ?></option>
            <option value="C.C">Cédula de Ciudadanía</option>
            <option value="T.I">Tarjeta de identidad</option>
            <option value="C.E">Cédula de extranjería</option>
            <option value="P.D">Pasaporte</option>
      </select>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col">
      <!-- Grupo: Fecha de nacimiento -->
      <label for="FechaNacimiento" class="form-label">Fecha de Nacimiento:</label>
      <input type="date" class="form-control"  value="<?php echo $usuario['FechaNacimiento']; ?>" min="1920-01-01" max="2018-12-31" required="">


       

      </div>
    </div>

    <div class="row mt-4">
      <div class="col">
      <!-- Grupo: Correo Electronico -->
      <label for="correoUser" class="form-label">Correo Electrónico:</label>
      <input type="email" class="form-control"  placeholder="Correo@ejemplo.com" name="correoUser" aria-describedby="basic-addon1" value ="<?php echo $usuario['correoUser']; ?>" required="" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" maxlength="70">
      </div>

      <div class="col">
      <!-- Grupo: telefono -->
      <label for="telefono" class="form-label">Teléfono:</label>
      <input type="text" class="form-control"  name="telefono" placeholder="3003567882" value ="<?php echo $usuario['telefono']; ?>" required="" minlength="7" maxlength="12" pattern="[0-9]+">
      </div>

      <div class="col">
      <!-- Grupo: Dirección -->
      <label for="direccionUser" class="form-label">Dirección:</label>
      <input type="text" class="form-control" name="direccionUser" placeholder="Tv 33 80d 27sur" required value ="<?php echo $usuario['direccionUser']; ?>" required="" maxlength="50" pattern="[a-zA-Z0-9 ]+">
      </div>
    </div>

    <!--<div class="row mt-4">
      <div class="col">
       Grupo: Generar Contraseña 
      <label for="password" class="form-label">Contraseña</label>
      <input type="password" class="form-control" name="contrasena" placeholder="*********" value ="<?php echo $usuario['contrasena']; ?>" required="">
     </div>
   </div>-->

  <div class="row mt-4">
    <div class="col">
    <!-- Grupo: Estado -->
    <label for="estadoUser" class="form-label">Estado:</label>
    <select class="form-control" name="estadoUser" required="">
      <option selected disabled value=""><?php echo $usuario['estadoUser']; ?></option>
      <option value="Activo">Activo</option>
      <option value="Inactivo">Inactivo</option>
    </select>
  </div>

    <div class="col">
    <!-- Grupo: Rol -->
    <label for="tipoRol" class="form-label">Tipo de Rol:</label>
    <select class="form-control" name="tipoRol" required="">
      <option selected disabled value=""><?php echo $usuario['tipoRol']; ?></option>
      <option value="Administrador">Administrador</option>
      <option value="Fisioterapeuta">Fisioterapeuta</option>
      <option value="Paciente">Paciente</option>
    </select>
    </div>
  </div>

</div><!-- modal Body-->
  <div class="modal-footer">
       <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
       <button type="submit" class="btn btn-primary">Actualizar</button>
          </div>
          </form><!-- Cierre Form-->
        </div>
      </div>
    </div>




                        <?php
                            }
                              }
                        ?>
                             </tbody>
                             </table>
						      

	    <footer class="app-footer">
		   <!--  <div class="container text-center py-3">
		         /* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */
            <small class="copyright">Diseñado por Aprendices SENA<i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>

		    </div> -->
	    </footer><!--//app-footer-->

    </div><!--//app-wrapper-->



       <!-- Modal Agregar-->
        <div class="modal fade" id="modalAgregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog  modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
    <div class="modal-body">
    <!-- Form -->
        <form action="../controlador/add.php<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="needs-validation" novalidate>

    <div class="row">
    <div class="col">
    <!-- Grupo: Nombres -->
    <label for="nombreUser" class="form-label">Nombres:</label>
    <input type="text" class="form-control" id="nombreUser" name="nombreUser" maxlength="40" pattern="[A-Za-z ]{1,40}" placeholder="Jhonn Jairo" aria-label="Nombres" required="">
    <div class="valid-feedback">Se ve Bien!</div>
    <div class="invalid-feedback">No pueden haber numeros en este campo!</div>
  </div>

 
    <div class="col">
    <!-- Grupo: Apellidos -->
    <label for="apellidoUser" class="form-label">Apellidos:</label>
    <input type="text" class="form-control" id="apellidoUser" name="apellidoUser" maxlength="40" pattern="[A-Za-z ]{1,40}" placeholder="Diaz Lozano" aria-label="Apellidos" required="">
    <div class="valid-feedback">Se ve Bien!</div>
    <div class="invalid-feedback">No pueden haber numeros en este campo!</div>
    </div>

    <div class="col">
    <!-- Grupo: tipo de Documento -->
    <label for="tipoDocumento" class="form-label">Tipo de documento:</label>
    <select class="form-select" id="tipoDocumento" name="tipoDocumento" required="">
    <option selected disabled value="">Seleccione...</option>
    <option value="C.C">Cédula de Ciudadanía</option>
    <option value="T.I">Tarjeta de identidad</option>
    <option value="C.E">Cédula de extranjería</option>
    <option value="P.D">Pasaporte</option>
    </select>
    <div class="valid-feedback">OK!</div>
    <div class="invalid-feedback">No puedes dejar este campo vacio!</div>
    </div>
    </div>

    <div class="row mt-4">
    <div class="col">
    <!-- Grupo: Numero de Documento -->
    <label for="NumDocumento" class="form-label">Número de documento:</label>
    <input type="text" class="form-control" id="numDocumento" name="NumDocumento" minlength="6" maxlength="10" pattern="[0-9]+" placeholder="1024604999" required="">
    <div class="valid-feedback">Se ve Bien!</div>
    <div class="invalid-feedback">Completa el campo!</div>
    </div>
    </div>

    <div class="row mt-4">
    <div class="col">
    <!-- Grupo: Fecha de nacimiento -->
    <label for="FechaNacimiento" class="form-label">Fecha de Nacimiento:</label>
    <input type="date" class="form-control" id="FechaNacimiento" name="FechaNacimiento" min="1920-01-01" max="2018-12-31" required="">
    <div class="valid-feedback">OK!</div>
    <div class="invalid-feedback">No puedes dejar este campo vacio!</div>
    </div>
    </div>

    <div class="row mt-4">
    <div class="col">
    <!-- Grupo: Correo Electronico -->
    <label for="correoUser" class="form-label">Correo Electrónico:</label>
    <input type="email" class="form-control" id="correoUser" placeholder="Correo@ejemplo.com" name="correoUser" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" maxlength="70" aria-describedby="basic-addon1" required="">
    <div class="valid-feedback">Se ve Bien!</div>
    <div class="invalid-feedback">Verifica bien tu correo!</div>
    </div>

    <div class="col">
    <!-- Grupo: telefono -->
    <label for="telefono" class="form-label">Teléfono:</label>
    <input type="text" class="form-control" id="telefono" name="telefono" minlength="7" maxlength="12" pattern="[0-9]+" placeholder="3003567882" required="">
    <div class="valid-feedback">Se ve Bien!</div>
    <div class="invalid-feedback">ojo solo se permiten números!</div>
  </div>

    <div class="col">
    <!-- Grupo: Dirección -->
    <label for="direccionUser" class="form-label">Dirección:</label>
    <input type="text" class="form-control" id="direccionUser" name="direccionUser" maxlength="50" pattern="[a-zA-Z0-9 ]+" placeholder="Tv 33 80d 27sur" required="">
    <div class="valid-feedback">Se ve Bien!</div>
    <div class="invalid-feedback">Este campo no puede estar Vacio!</div>

  </div>
    </div>


    <div class="row mt-4">


    <div class="col">
    <!-- Grupo: Rol -->
    <label for="tipoRol" class="form-label">Tipo de Rol:</label>
    <select class="form-control" name="tipoRol" required="">
    <option selected disabled value="">Seleccione...</option>
    <option value="Administrador">Administrador</option>
    <option value="Fisioterapeuta">Fisioterapeuta</option>
    <option value="Paciente">Paciente</option>
    </select>
    <div class="valid-feedback">OK!</div>
    <div class="invalid-feedback">No puedes dejar este campo vacio!</div>
    </div>
    </div>
    
    </div><!-- modal Body-->
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
<button type="submit" class="btn btn-primary">Registrar</button>
</form><!-- Cierre Form-->
</div>
</div>
</div>
</div>


    <!-- Javascript -->
    <script src="../../assets/plugins/popper.min.js"></script>
    

    <!-- Charts JS -->
    <script src="../../assets/plugins/chart.js/chart.min.js"></script>


    <!-- Page Specific JS -->
    <script src="../../assets/js/app.js"></script>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="../../assets/jquery/jquery-3.3.1.min.js"></script>


    <!-- datatables JS -->
    <script type="text/javascript" src="../../assets/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="../../assets/main.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

 
   <script type="text/javascript" src="../../assets/js/datosValidar.js"></script>
  

</body>
</html>
