<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Editar socio<?= APP_NAME ?></title>
		
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
		<?= $template->header('Editar socio') ?>
		<?= $template->menu() ?>
		<?= $template->breadCrumbs(["Socio" => NULL]) ?>
		<?= $template->messages() ?>
		<?= $template->acceptCookies() ?>
		
		<main>
			<h1><?=APP_NAME?></h1>
			<h2>Edición del socio<?= $socio->nombre?> <?= $socio->apellidos?></h2>
			
			<form method="POST" action="/Socio/update">
			
				<input type="hidden" name="id" value="<?= $socio->id?>">
				
				<label>DNI</label>
				<input type="text" name="dni" value="<?= old('dni', $socio->dni)?>">
				<br>
    			<label>Nombre</label>
    			<input type="text"  name="nombre" value="<?= old('nombre')?>">
    			<br>
    			<label>Apellidos</label>
    			<input type="text"  name="apellidos" value="<?= old('apellidos')?>">
    			<br>
    			<label>Poblacion</label>
    			<input type="text"  name="poblacion" value="<?= old('poblacion')?>">
    			<br>
    			<label>Telefono</label>
    			<input type="number"  name="telefono" value="<?= old('telefono')?>">
    			<br>
    			<label>Email</label>
    			<input type="text"  name="email" value="<?= old('email')?>">
    			<br>
    			
    			<div class="centrado mt2">
    				<input class="button" type="submit" name="actualizar" value="Actualizar">
    				<input class="button" type="reset" name="reset" value="Reset">
    			
    			</div>

				</form>
				    			
    			<div class= "centrado mt2">
    				<a class="button" onclick="history.back()">Atrás</a>
    				<a class="button" href="/Socio/list">Lista de socios</a>
    				<a class="button" href="/Socio/show/ <?= $socio->id ?>">Detalles</a>
    				<a class="button" href="/Socio/delete/ <?= $socio->id ?>">Borrado</a>
    			</div>
	
		</main>
	</body>
</html>