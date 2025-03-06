<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Editar prestamo<?= APP_NAME ?></title>
		
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
		<?= $template->header('Editar prestamo') ?>
		<?= $template->menu() ?>
		<?= $template->breadCrumbs(["Editar prestamo" => NULL]) ?>
		<?= $template->messages() ?>
		<?= $template->acceptCookies() ?>
		
		<main>
			<h1><?=APP_NAME?></h1>
			<h2>Edición del prestamos<?= $prestamo->id?></h2>
			
			<form method="POST" action="/Prestamo/update">
			
				<input type="hidden" name="id" value="<?= $prestamo->id?>">
				
				<label>Socio</label>
				<input type="text" name="socio" value="<?= old('socio', $prestamo->socio)?>">
				<br>
				
				<label>Ejemplar</label>
				<input type="text" name="ejemplar" value="<?= old('ejemplar', $prestamo->ejemplar)?>">
				<br>
				
				<label>Límite</label>
				<input type="text" name="limite" value="<?= old('limite', $prestamo->limite)?>">
				<br>
    			
    			<div class="centrado mt2">
    				<input class="button" type="submit" name="actualizar" value="Actualizar">
    				<input class="button" type="reset" name="reset" value="Reset">
    			
    			</div>

				</form>
				    			
    			<div class= "centrado mt2">
    				<a class="button" onclick="history.back()">Atrás</a>
    				<a class="button" href="/Prestamo/list">Lista de prestamos</a>
    				<a class="button" href="/Prestamo/show/ <?= $prestamo->id ?>">Detalles</a>
    				<a class="button" href="/Prestamo/delete/ <?= $prestamo->id ?>">Borrado</a>
    			</div>
	
		</main>
	</body>
</html>