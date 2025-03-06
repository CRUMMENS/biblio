<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Borrado de prestamos <?= APP_NAME ?></title>
		
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
		<?= $template->header('Borrar un prestamo') ?>
		<?= $template->menu() ?>
		<?= $template->breadCrumbs(["Borrar un prestamo" => NULL]) ?>
		<?= $template->messages() ?>
		<?= $template->acceptCookies() ?>
		
		<main>
			<h1><?=APP_NAME?></h1>
			<h2>Borrar prestamo</h2>
			
			<form method="POST" class="p2 m2" action="/Prestamo/destroy">
				<p>Comfirmar el borrado del prestamo <b><?=$prestamo->id?></b>.</p>
				
				<input type="hidden" name="id" value="<?=$prestamo->id?>">
				<input class="button-danger" type="submit" name="borrar" value="Borrar">
			</form>
			
			<div class="centered">
					<a class="button" onclick="history.back()">Atrás</a>
    				<a class="button" href="/Prestamo/list">Lista de prestamos</a>
    				<a class="button" href="/Prestamo/show/ <?= $prestamo->id ?>">Detalles</a>
    				<a class="button" href="/Prestamo/delete/ <?= $prestamo->id ?>">Borrado</a>
    			</div>