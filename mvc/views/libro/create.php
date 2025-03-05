<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Listado de ejemplos de maquetación - <?= APP_NAME ?></title>
		
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
		<?= $template->breadCrumbs(["Ejemplos de maquetación" => NULL]) ?>
		<?= $template->messages() ?>
		<?= $template->acceptCookies() ?>
		
	
	<main>
		<h1><?= APP_NAME?></h1>
		<h2>Nuevo libro</h2>
	<form method="POST" enctype="multipart/form-data" action="/Libro/store">
	
		<div class="flex2">
			<label>ISBN</label>
			<input type="text"  name="isbn" value="<?= old('isbn')?>">
			<br>
			<label>Título</label>
			<input type="text"  name="titulo" value="<?= old('tirulo')?>">
			<br>
			<label>Editorial</label>
			<input type="text"  name="editorial" value="<?= old('editorial')?>">
			<br>
			<label>Autor</label>
			<input type="text"  name="autor" value="<?= old('editorial')?>">
			<br>
			<label>Idioma</label>
			<select name="idioma">
				<option value="Castellano" <?= oldSelected('idioma', 'Castellano')?>>
				Castellano</option>
				<option value="Catalán"    <?= oldSelected('idioma', 'Catalán')?>>
				Catalán</option>
				<option value="Otros" <?= oldSelected('idioma', 'Otros')?>>
				Otros</option>
			</select>
			<br>
			<label>Edición</label>
			<input type="text"  name="edicion" value="<?= old('edicion')?>">
			<br>
			<label>Año</label>
			<input type="number"  name="año" value="<?= old('anyo')?>">
			<br>
			<label>Edad rec.</label>
			<input type="number"  name="edadrecomendada" value="<?= old('edadrecomendada')?>">
			<br>
			
			<label>Páginas</label>
			<input type="number"  name="paginas" value="<?= old('paginas')?>">
			<br>
			
			<label>Características</label>
			<input type="text"  name="caracteristicas" value="<?= old('caracteristicas')?>">
			<br>
			
			<label>Sinopsis</label>
			<textarea name="sinopsis" class="w50"><?= old('paginas')?></textarea>
			<br>
			<div class="centered mt2">
				<input type="submit" class="button" name="guardar" value="Guardar">
				<input type="reset" class="button" value="Reset">
			</div>
		</div>
	</form>
		<div class="centrado my2">
			<a class="button" onclick="history.back()">Atrás</a>
			<a class="button" href="/Libro/list">Lista de libros</a>
		</div>
	</main>
	</body>
</html>