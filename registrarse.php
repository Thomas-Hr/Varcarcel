
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Se parte de nosotros</title>
    
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

    <link rel="stylesheet" href="assets/css/bootstrap-5.1.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-5.1.0-dist/css/bootstrap.css">

</head> 


<body class="app app-signup p-0">    	
    <div class="g-8 app-auth-wrapper">
	    <div class="col-12 col-md-12 col-lg-12 auth-main-col text-center p-5" style=" width: 80%; margin: auto; padding: 50%;">
		    <div class="d-flex flex-column align-content-end">
				    <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html"><img class="logo-icon me-2" src="assets/images/logob.png" alt="logo"></a></div>
					<h2 class="auth-heading text-center mb-4">Se parte de nosotros !!</i></h2>					
	
					<div class="auth-form-container text-start mx-auto">

						<form class="auth-form auth-signup-form needs-validation" novalidate action="./FORMULARIODECONTACTO/PHPMailer-master/datosReg.php" method="post" id="formulario">  
                            <div class="row justify-content-center">    
							<div class="col-6 name mb-3 ">
								<label class="sr-only" for="signup-name">Nombres</label>
								<input id="signup-name" name="nombre" type="text" class="form-control signup-name" placeholder="Nombre" required="required" maxlength="40" pattern="[A-Za-z ]{1,40}">
								 <div class="valid-feedback">Se ve Bien!</div>
    							 <div class="invalid-feedback">No pueden haber numeros en este campo!</div>
							</div>
							<div class="col-6 apellido mb-3">
								<label class="sr-only" for="signup-apellido">Apellidos</label>
								<input id="signup-apellido" name="apellido" type="apellido" class="form-control signup-apellido" placeholder="Apellidos" required="required" maxlength="40" pattern="[A-Za-z ]{1,40}">
								 <div class="valid-feedback">Se ve Bien!</div>
    							 <div class="invalid-feedback">No pueden haber numeros en este campo!</div>
							</div>
							<div class="col-6 apellido mb-3">
								<label  class="sr-only" for="tipoDocumento">Tipo de documento:</label>
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
							<div class="col-6 password mb-3">
								<label class="sr-only" for="signup-password">Número de documento</label>
								<input id="signup-password" name="documento" type="text" class="form-control signup-password" placeholder="Número de documento" required="required"  minlength="6" maxlength="10" pattern="[0-9]+">
								<div class="valid-feedback">Se ve Bien!</div>
    							<div class="invalid-feedback">Verifique qu el campo este completo y que solo lleve numeros!</div>
							</div>


                            <div class="col-6 email mb-3">
								<label class="sr-only" for="signup-email">Fecha Nacimiento</label>
								<input id="signup-name" name="fechaNa" type="date" class="form-control signup-name" placeholder="Full name" required="required" min="1920-01-01" max="2018-12-31">
								<div class="valid-feedback">OK!</div>
    							<div class="invalid-feedback">No puedes dejar este campo vacio!</div>
							</div>
							<div class=" col-6 email mb-3">
								<label class="sr-only" for="signup-email">Correo Electrónico</label>
								<input id="signup-email" name="correo" type="email" class="form-control signup-email" placeholder="Email" required="required" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" maxlength="70">
								<div class="valid-feedback">Se ve Bien!</div>
    							<div class="invalid-feedback">Verifica bien tu correo!</div>
							</div>
							

							<div class="col-6 password mb-3">
								<label class="sr-only" for="signup-password">Telefono</label>
								<input id="signup-password" name="telefono" type="text" class="form-control signup-password" placeholder="Número de Telefono" required="required" minlength="7" maxlength="12" pattern="[0-9]+">
								<div class="valid-feedback">Se ve Bien!</div>
    						    <div class="invalid-feedback">Ojo solo se permiten números y no puede estar vacio el campo!</div>
							</div>


                            <div class="col-6 email mb-3">
								<label class="sr-only" for="signup-email">Dirección</label>
								<input id="signup-name" name="direccion" type="text" class="form-control signup-name" placeholder="Dirección" required="required" maxlength="50" pattern="[a-zA-Z0-9 ]+">
								<div class="valid-feedback">Se ve Bien!</div>
    							<div class="invalid-feedback">Este campo no puede estar Vacio!</div>
							</div>
							
							<div class=" col-6 password mb-3">
								<label class="sr-only" for="signup-password">Tipo rol</label>
								<input id="signup-password" name="tipoRol" type="text" class="form-control signup-password" value="Paciente" required="required" readonly>
							</div>

							<div class="extra mb-3" >
								<div class="form-check">
									<a href="./terminosServicio.html" target="_blank" class="app-link">Términos de servicio</a> y 
										<a href="./politicaPrivacidad.html" target="_blank" class="app-link">la Política de privacidad del Portal.</a>.
									<input class="form-check-input" type="checkbox" value="" id="RememberPassword" required="">
									<label class="form-check-label" for="RememberPassword">
										Acepto los terminos y condiciones.</label>
									 <div class="valid-feedback">OK!</div>
    							<div class="invalid-feedback">Este campo no puede estar Vacio!</div>
								</div>
 								
                            </div> 
							
							</div><!--//extra-->
							
							<div class="text-center">
								<button type="submit" class="btn app-btn-primary w-60 theme-btn mx-auto">Registrarme</button>
							</div>
						</form><!--//auth-form-->
						
						<div class="auth-option text-center pt-5">¿Ya tienes una cuenta? <a class="text-link" href="login.php" >Iniciar sesión</a></div>
					</div><!--//auth-form-container-->	
					
					
				    
			    </div><!--//auth-body-->
		    
			    <footer class="app-auth-footer">
				    <div class="container text-center py-3">
				         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
			        <small class="copyright">Tus datos se enviaran a un Administrador para que los valide <i class="fas fa-heart" style="color: #fb866a;"></i></small>
				       
				    </div>
			    </footer><!--//app-auth-footer-->	
		    </div><!--//flex-column-->   
	    </div><!--//auth-main-col-->
	  
    
    </div><!--//row-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

<script type="text/javascript" src="assets/js/datosValidar.js"></script>

</body>
</html> 

