<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Biblio - <?= APP_NAME ?></title>
		
		<!-- META -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Listado de ejemplos de maquetación en <?= APP_NAME ?>">
		<meta name="author" content="Robert Sallent">
		
		<!-- FAVICON -->
		<link rel="shortcut icon" href="/favicon.ico" type="image/png">	
		
		<!-- CSS -->
		<?= $template->css() ?>
	</head>
	
	
	
	
	<body>
	
		<main>
		
			<h1> Panel del bibliotecario</h1>
			<p> Aqui encontrarás los enlaces a las distintas operaciones para el <b>bibliotecario</b>:</p>
		
			<div class="flex-container gap2">
				<section class="flex1">
					<h2>Operaciones con libros</h2>
					
					<ul>
						<li><a href='/Libro'>Lista de libros</a></li>
						<li><a href='/Libro/create'>Nuevo libro</a></li>
					</ul>					
				</section>
			</div>
			
			
			<div class="flex-container gap2">
				<section class="flex1">
					<h2>Operaciones con socios</h2>
					
					<ul>
						<li><a href='/Socio'>Lista de socios</a></li>
						<li><a href='/Socio/create'>Nuevo socio</a></li>
					</ul>					
				</section>
			</div>
			
			
			<div class="flex-container gap2">
				<section class="flex1">
					<h2>Operaciones con temas</h2>
					
					<ul>
						<li><a href='/Tema'>Lista de temas</a></li>
						<li><a href='/Tema/create'>Nuevo tema</a></li>
					</ul>					
				</section>
			</div>
			
			
			<div class="flex-container gap2">
				<section class="flex1">
					<h2>Operaciones con prestamos</h2>
					
					<ul>
						<li><a href='/Prestamo'>Lista de prestamos</a></li>
						<li><a href='/Prestamo/create'>Nuevo prestamo</a></li>
					</ul>					
				</section>
			</div>
			
		</main>
	
	
	
	
		
	</body>
</html>