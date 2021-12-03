
<!DOCTYPE html>
<html lang="es-ES"> 
<head>
	<title>Iniciar sesión</title>
	
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


<body class="app app-login p-0">    	
	<div class="row g-0 app-auth-wrapper">
		<div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
			<div class="d-flex flex-column align-content-end">
				<div class="app-auth-body mx-auto">	
					<div class="app-auth-branding mb-4"><a class="app-logo" href="index.php"><img class="logo-icon me-2" src="assets/img/logob.png" alt="logo"></a></div>
					<h2 class="auth-heading text-center mb-5">Iniciar Sesión</h2>
					<div class="auth-form-container text-start">
						<form class="auth-form login-form needs-validation" novalidate action="Usuario/Controlador/login.php" method="post">         
							<div class="email mb-3">
								<label class="sr-only"   for="signin-email">Correo Electrónico:</label>
								<input id="signin-email"  name="Usuario" type="email" class="form-control signin-email" placeholder="Ejemplo@extensión.com" required="required" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" maxlength="70">
								<div class="valid-feedback">Se ve Bien!</div>
								<div class="invalid-feedback">Verifica bien tu correo!</div>
							</div><!--//form-group-->
							<div class="password mb-6">
							<div class="input-group">
								<label class="sr-only" for="password">Contraseña</label>
								<input style="width:85%" id="password" name="Clave" type="password" class="form-control password" placeholder="Contraseña" required="required" minlength="2" maxlength="20" >
								<a  class="form-control"  id="viewPassword"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg></a>
								</div>
								<div class="valid-feedback">Se ve Bien!</div>
								<div class="invalid-feedback">Solo se permiten números y letras!</div>
								</div><!--//form-group-->

								<div class="extra mt-3 row justify-content-between">
									<div class="col-6">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="RememberPassword">
											<label class="form-check-label" for="RememberPassword">
												Recordar contraseña
											</label>
										</div>
									</div><!--//col-6-->
									<div class="col-6">
										<div class="forgot-password text-end">
											<a href="recuperarContraseña.php">olvidaste tu contraseña?</a>
										</div>
									</div><!--//col-6-->
								</div><!--//extra-->
							
							<div class="text-center">
								<button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Inicia sesión</button>
							</div>
						</form>
						
						<div class="auth-option text-center pt-5">No tienes cuenta? Registrate <a class="text-link" href="registrarse.php" >Aqui!</a>.</div>
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

	<script>
      let password = document.getElementById('password');
        let viewPassword = document.getElementById('viewPassword');
        let click = false;
        
        viewPassword.addEventListener('click', (e)=>{
          if(!click){
            password.type = 'text'
            click = true
          }else if(click){
            password.type = 'password'
            click = false
          }
        })
        </script>
	<script type="text/javascript" src="assets/js/datosValidar.js"></script>
</body>
</html> 

