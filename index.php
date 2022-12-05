<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>IDESDEV</title>
</head>
<body>
	<header>
		<div class="contenedor">
			<h1>IDESDEV</h1>
			<nav class="menu">
				<input type="checkbox" id="menures">
				<label class="lbmenu" for="menures"><img class="imgmenu" src="img/menu.png"></label>
				<?php
					include("menu.php");
				?>
			</nav>
		</div>
	</header>
	<main>
		<!-- AQUI ESTARA EL ESLIDE O BANNER -->
		<section id="logo">
			<img src="img/logo.png">
		</section>

		<!-- AQUI EMPIEZA EL CONTENIDO DE LA PAGINA -->
		<section id="bienvenidos">
			<h3>BIENVENIDOS A IDESDEV</h3>
			<p>Somos Diseño y Desarrollo, enfocados en dar el mejor servicio de creacion
				de paginas web, diseño de pequeños sistemas, totalmente adaptables a
				cualquier dispositivo movil.
			</p>
		</section>

		<!-- AQUI EMPIEZA EL BLOG DE LA PAGINA -->
		<section id="blog">
			<h3>Lo ultimo de nuestro Blog</h3>
			<div class="contenedor">
				<article>
					<img class="imagen" src="img/enfoque.jpg">
						<h4>Nuestro Enfoque</h4>
					</img>
				</article>
				<article>
					<img class="imagen" src="img/equipotrabajo.jpg">
						<h4>Nuestro Equipo</h4>
					</img>
				</article>
				<article>
					<img class="imagen" src="img/clientes.jpg">
						<h4>Nuestros Clientes</h4>
					</img>
				</article>
			</div>
		</section>
	</main>

	<!-- AQUI COMENZAMOS CON EL PIE DE PAGINA -->
	<footer>
			<h3>IDESDEV 2022 &copy &reg  </h3>
			<h4>Un mundo infinito para diseñar y para desarrollar donde tu imaginacion no tiene limites</h4>
			<nav>
				<?php
					include("menu2.php");
				?>
			</nav>
	</footer>

</body>
</html>
