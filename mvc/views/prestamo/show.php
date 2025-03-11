<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>show de prestamos - <?= APP_NAME ?></title>
		
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
		<?= $template->header('Ejemplos de maquetación') ?>
		<?= $template->menu() ?>
		<?= $template->breadCrumbs(["Prestamos" => NULL]) ?>
		<?= $template->messages() ?>
		<?= $template->acceptCookies() ?>
		
	<body>
	
	<main>
		<h1><?= APP_NAME?></h1>
		<section>
			<h2><?= $prestamo->id?></h2>
			
			<p><b>Id:</b>				<?= $prestamo->id?></p>
			<p><b>Socio:</b>			<?= $prestamo->socio?></p>
			<p><b>Ejemplar:</b>			<?= $prestamo->ejemplar?></p>
			<p><b>Título:</b>			<?= $prestamo->titulo?></p>
			<p><b>Límite:</b>			<?= $prestamo->limite?></p>
			<p><b>Devolución:</b>		<?= $prestamo->devolucion?></p>
			
			
		
		<div class="centrado">
			<a class= button" onclick="history.back()">Atrás</a>
			<a class= button" href="/Prestamo/list">Lista de prestamos</a>
			<a class= button" href="/Prestamo/edit/<?= $prestamo->id?>">Editar</a>
			<a class= button" href="/Prestamo/delete/<?= $prestamo->id?>">Borrar</a>
		
		</div>
	</main>
	</body>
</html>