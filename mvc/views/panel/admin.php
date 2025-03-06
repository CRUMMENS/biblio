<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Admin - <?= APP_NAME ?></title>
		
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
		
			<h1> Panel del administrador</h1>
			<p> Aqui encontrarás los enlaces a las distintas operaciones para el <b>administrador</b>:</p>
		
			<div class="flex-container gap2">
				<section class="flex1">
				
					<h2>Operaciones con usuarios</h2>
					
					<ul>
						<li><a href='/User'>Lista de usuarios</a></li>
						<li><a href='/User/create'>Nuevo usuario</a></li>
					</ul>		
								
				</section>
			</div>
			
		</main>

		
	</body>
</html>