<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Show Socios - <?= APP_NAME ?></title>
		
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
		<?= $template->login() ?>
		<?= $template->header('Show socios') ?>
		<?= $template->menu() ?>
		<?= $template->breadCrumbs(["Socios" => NULL]) ?>
		<?= $template->messages() ?>
		<?= $template->acceptCookies() ?>
		
	<body>
	
	<main>
		<h1><?= APP_NAME?></h1>
		<section>
			<h2>Socio <?= $socio->nombre?> <?= $socio->apellidos?></h2>
			
			<p><b>DNI:</b>				<?= $socio->dni?></p>
			<p><b>Nombre:</b>			<?= $socio->nombre?></p>
			<p><b>Apellidos:</b>		<?= $socio->apellidos?></p>
			<p><b>Población:</b>		<?= $socio->poblacion?></p>
			<p><b>Telefono:</b>			<?= $socio->telefono?></p>
			<p><b>Email:</b>			<?= $socio->email?></p>

		</section>
		

		
		<div class="centrado">
			<a class= button" onclick="history.back()">Atrás</a>
			<a class= button" href="/Socio/list">Lista de socios</a>
			<a class= button" href="/Socio/edit/<?= $socio->id?>">Editar</a>
			<a class= button" href="/Socio/delete/<?= $socio->id?>">Borrar</a>
		
		</div>
	</main>
	</body>
</html>