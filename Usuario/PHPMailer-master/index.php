<!DOCTYPE html>
<html lang="en">
<head>
		<title>Form contact</title>
	<!--===============================================================================================-->
		<script src="https://kit.fontawesome.com/0542c8604e.js" crossorigin="anonymous"></script>
	<!--===============================================================================================-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
	<!--===============================================================================================-->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
		<link rel="stylesheet" href="formulario.css">
	<!--===============================================================================================-->
</head>
<body>

<section id="servicios">
	<div class="servicio">
		<form action="enviar-prueba.php" method="POST">
		
				<article class="caja" id="caja1" >
				<a href=""><i class="fas fa-chevron-circle-left"></i></a>
				<h2>Contactanos</h2>
				<form action="#" method="#" class="#">
				<label>Nombres:</label>
				<input type="text" name="nombre" class="input" placeholder="Nombre completo" required="">
				<label>Email:</label>
				<input type="email" name="correo" class="input" placeholder="Escribe tu email" required="">
				<label>Telefono:</label>
				<input type="text" name="telefono" class="input" class="input" placeholder="Danos tu numero para contactarte" required="">
				<label>Contenido:</label>
				<textarea name="mensaje" class="input" rows="10" cols="40"
				placeholder="Escribe aquí tu mensaje"></textarea>
				<button class="botonE">Enviar</button>
				</article>
		</form>

			<article class="caja" id="caja2">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.839046552109!2d-74.15180998538563!3d4.622788996641795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9fc631e5d25b%3A0xe85bbe5f5fb1fd2e!2sConsultorio%20fisioterapia%20valcarcel!5e0!3m2!1ses-419!2sco!4v1624590632513!5m2!1ses-419!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</article>

	</div>
</section>

</body>
</html>
