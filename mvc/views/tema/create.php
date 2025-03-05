<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Listado de temas - <?= APP_NAME ?></title>
		
		<!-- META -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Listado de temas <?= APP_NAME ?>">
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
		<?= $template->breadCrumbs(["Listado de temas" => NULL]) ?>
		<?= $template->messages() ?>
		<?= $template->acceptCookies() ?>
		
	
	<main>
		<h1><?= APP_NAME?></h1>
		<h2>Nuevo tema</h2>
		
	<form method="POST" enctype="multipart/form-data" action="/Tema/store">
	
		<div class="flex2">
			<label>Tema</label>
			<input type="text"  name="tema" value="<?= old('tema')?>">
			<br>
			<label>Descripcion</label>
			<input type="text"  name="descripcion" value="<?= old('descripcion')?>">
			<br>
			
			<div class="centered mt2">
				<input type="submit" class="button" name="guardar" value="Guardar">
				<input type="reset" class="button" value="Reset">
			</div>
			
		</div>
	</form>
	
		<div class="centrado my2">
			<a class="button" onclick="history.back()">Atrás</a>
			<a class="button" href="/Tema/list">Lista de temas</a>
		</div>
	</main>
	</body>
</html>