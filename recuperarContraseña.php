<?php 
require_once('./conexion.php');
require_once('./metodos.php');
?>

<!DOCTYPE html>
<html lang="es-ES"> 
<head>
    <title>Recuperar Contraseña</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="icon" type="imgage/img" href="assets/img/logob.png"> 
    
    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

</head>
<body class="app app-reset-password p-0">    	
    <div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">	
				    <div class="app-auth-branding mb-4"><a class="app-logo" href="index.php"><img class="logo-icon me-2" src="assets/img/logob.png" alt="logo"></a></div>
					<h2 class="auth-heading text-center mb-4">Restablecimiento de contraseña</h2>

					<div class="auth-intro mb-4 text-center">Ingrese su dirección de correo electrónico a continuación. Le enviaremos por correo electrónico un enlace a una página donde puede crear fácilmente una nueva contraseña.</div>
	
					<div class="auth-form-container text-left">
						
		<form class="auth-form resetpass-form needs-validation" novalidate action="FORMULARIODECONTACTO/PHPMailer-master/RECUPERAR/controlador.php" method="POST">                
							<div class="email mb-3">
								<label class="sr-only" for="reg-email">Tu correo electrónico</label>
								<input id="reg-email" name="correo" type="email" class="form-control login-email" placeholder="Tu correo" required="required" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" maxlength="70">
								<div class="valid-feedback">Se ve Bien!</div>
    							<div class="invalid-feedback">Ingresa un correo válido, o no deje el campo vácio!</div>
							</div><!--//form-group-->
							<div class="text-center">
								<button type="submit" class="btn app-btn-primary btn-block theme-btn mx-auto">Restablecer contraseña</button>
							</div>
						</form>
						
						<div class="auth-option text-center pt-5"><a class="app-link" href="login.php" >Iniciar sesión</a> <span class="px-2">|</span> <a class="app-link" href="login.php" >Registrarse</a></div>
					</div><!--//auth-form-container-->


			    </div><!--//auth-body-->
		    
			    
		    </div><!--//flex-column-->   
	    </div><!--//auth-main-col-->
	   <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
		    <div class="auth-background-holder">
		    </div>
		    <div class="auth-background-mask"></div>
		    <div class="auth-background-overlay p-3 p-lg-5">
			    <div class="d-flex flex-column align-content-end h-100">
				    <div class="h-100"></div>
				    <div class="overlay-content p-3 p-lg-4 rounded">
					    <h5 class="mb-3 overlay-title">Es un gusto tenerte con Nosotros</h5>
					    <div>Por eso estamos a la disposición de tus servicios.</div>
				    </div>
				</div>
		    </div><!--//auth-background-overlay-->
	    </div><!--//auth-background-col-->
    
    </div><!--//row-->

<script type="text/javascript" src="assets/js/datosValidar.js"></script>
</body>
</html> 

