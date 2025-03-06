<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Editar libro<?= APP_NAME ?></title>
		
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
			<h1><?=APP_NAME?></h1>
			<h2>Edición del libro<?= $libro->titulo?></h2>
			
			<form method="POST" action="/Libro/update">
			
				<input type="hidden" name="id" value="<?= $libro->id?>">
				
				<label>ISBN</label>
				<input type="text" name="isbn" value="<?= old('isbn', $libro->isbn)?>">
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
    			
    			<div class="centrado mt2">
    				<input class="button" type="submit" name="actualizar" value="Actualizar">
    				<input class="button" type="reset" name="reset" value="Reset">
    			
    			</div>

				</form>
				    			
    			<div class= "centrado mt2">
    				<a class="button" onclick="history.back()">Atrás</a>
    				<a class="button" href="/Libro/list">Lista de libros</a>
    				<a class="button" href="/Libro/show/ <?= $libro->id ?>">Detalles</a>
    				<a class="button" href="/Libro/delete/ <?= $libro->id ?>">Borrado</a>
    			</div>
	
		</main>
	</body>
</html>