<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Editar tema<?= APP_NAME ?></title>
		
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
		<?= $template->header('Editar tema') ?>
		<?= $template->menu() ?>
		<?= $template->breadCrumbs(["Editar tema" => NULL]) ?>
		<?= $template->messages() ?>
		<?= $template->acceptCookies() ?>
		
		<main>
			<h1><?=APP_NAME?></h1>
			<h2>Edición del libro<?= $tema->tema?></h2>
			
			<form method="POST" action="/Tema/update">
			
				<input type="hidden" name="id" value="<?= $tema->id?>">
				
				<label>Tema</label>
				<input type="text" name="tema" value="<?= old('tema', $tema->tema)?>">
				<br>
    			<label>Descripción</label>
    			<input type="text"  name="descripcion" value="<?= old('descripcion')?>">
    			<br>
    			
    			
    			<div class="centrado mt2">
    				<input class="button" type="submit" name="actualizar" value="Actualizar">
    				<input class="button" type="reset" name="reset" value="Reset">
    			
    			</div>

				</form>
				    			
    			<div class= "centrado mt2">
    				<a class="button" onclick="history.back()">Atrás</a>
    				<a class="button" href="/Tema/list">Lista de temas</a>
    				<a class="button" href="/Tema/show/ <?= $tema->id ?>">Detalles</a>
    				<a class="button" href="/Tema/delete/ <?= $tema->id ?>">Borrado</a>
    			</div>
	
		</main>
	</body>
</html>