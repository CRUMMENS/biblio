<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Create prestamo - <?= APP_NAME ?></title>
		
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
		<?= $template->header('Crear un prestamo') ?>
		<?= $template->menu() ?>
		<?= $template->breadCrumbs(["Crear un prestamo" => NULL]) ?>
		<?= $template->messages() ?>
		<?= $template->acceptCookies() ?>
		
	
	<main>
		<h1><?= APP_NAME?></h1>
		<h2>Nuevo prestamo</h2>
	<form method="POST" enctype="multipart/form-data" action="/Prestamo/store">
	
		<div class="flex2">
			<label>Socio</label>
			<input type="text"  name="socio" value="<?= old('socio')?>">
			<br>
			<label>Ejemplar</label>
			<input type="text"  name="ejemplar" value="<?= old('ejemplar')?>">
			<br>
			<label>Limite</label>
			<input type="text"  name="limite" value="<?= old('limite')?>">
			<br>
			
			
			<div class="centered mt2">
				<input type="submit" class="button" name="guardar" value="Guardar">
				<input type="reset" class="button" value="Reset">
			</div>
		</div>
	</form>
		<div class="centrado my2">
			<a class="button" onclick="history.back()">Atrás</a>
			<a class="button" href="/Prestamo/list">Lista de prestamos</a>
		</div>
	</main>
	</body>
</html>