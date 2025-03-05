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
		
	<body>
	
	<main>
		<h1><?= APP_NAME?></h1>
		<section>
			<h2><?= $libro->titulo?></h2>
			
			<p><b>ISBN:</b>				<?= $libro->isbn?></p>
			<p><b>Título:</b>			<?= $libro->titulo?></p>
			<p><b>Editorial:</b>		<?= $libro->editorial?></p>
			<p><b>Autor:</b>			<?= $libro->autor?></p>
			<p><b>Idioma:</b>			<?= $libro->idioma?></p>
			<p><b>Edición:</b>			<?= $libro->edificio?></p>
			
			<p><b>Edad Recomendada:</b>
			<?= $libro->edadrecomendada ?? 'Pemdiente de calificación';?></p>
			
			<p><b>Año:</b><?= $libro-> anyo ?? '--'?></p>
			<p><b>Páginas:</b><?= $libro-> paginas ?? '--'?></p>
			<p><b>Características:</b><?= $libro-> caracteristicas ?? '--'?></p>
			
		</section>
		
		<section>
			<h2>Sinopsis</h2>
			<p><?= $libro->sinopsis ? paragraph($libro->sinopsis) : 'SIN DETALLES'?></p>
			
		
		</section>
		
		<div class="centrado">
			<a class= button" onclick="history.back()">Atrás</a>
			<a class= button" href="/Libro/list">Lista de libros</a>
			<a class= button" href="/Libro/edit/<?= $libro->id?>">Editar</a>
			<a class= button" href="/Libro/delete/<?= $libro->id?>">Borrar</a>
		
		</div>
	</main>
	</body>
</html>