<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Crear socio- <?= APP_NAME ?></title>
		
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
		<?= $template->header('Crear socio') ?>
		<?= $template->menu() ?>
		<?= $template->breadCrumbs(["Socios" => NULL]) ?>
		<?= $template->messages() ?>
		<?= $template->acceptCookies() ?>
		
	
	<main>
		<h1><?= APP_NAME?></h1>
		<h2>Nuevo socio</h2>
	<form method="POST" enctype="multipart/form-data" action="/Socio/store">
	
		<div class="flex2">
			<label>DNI</label>
			<input type="text"  name="dni" value="<?= old('dni')?>">
			<br>
			<label>Nombre</label>
			<input type="text"  name="nombre" value="<?= old('nombre')?>">
			<br>
			<label>Población</label>
			<input type="text"  name="poblacion" value="<?= old('poblacion')?>">
			<br>
			<label>Telefono</label>
			<input type="number"  name="telefono" value="<?= old('telefono')?>">
			<br>
			<label>Email</label>
			<input type="text"  name="email" value="<?= old('email')?>">
			<br>
				
			<div class="centered mt2">
				<input type="submit" class="button" name="guardar" value="Guardar">
				<input type="reset" class="button" value="Reset">
			</div>
		</div>
	</form>
		<div class="centrado my2">
			<a class="button" onclick="history.back()">Atrás</a>
			<a class="button" href="/Socio/list">Lista de socios</a>
		</div>
	</main>
	</body>
</html>