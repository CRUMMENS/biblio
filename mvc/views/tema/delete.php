<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Borrar tema <?= APP_NAME ?></title>
		
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
		<?= $template->header('Borrar tema ') ?>
		<?= $template->menu() ?>
		<?= $template->breadCrumbs(["Borrar tema " => NULL]) ?>
		<?= $template->messages() ?>
		<?= $template->acceptCookies() ?>
		
		<main>
			<h1><?=APP_NAME?></h1>
			<h2>Borrar tema</h2>
			
			<form method="POST" class="p2 m2" action="/Tema/destroy">
				<p>Comfirmar el borrado del tema<b><?=$tema->tema?></b>.</p>
				
				<input type="hidden" name="id" value="<?=$tema->id?>">
				<input class="button-danger" type="submit" name="borrar" value="Borrar">
			</form>
			
			<div class="centered">
					<a class="button" onclick="history.back()">Atrás</a>
    				<a class="button" href="/Tema/list">Lista de temas</a>
    				<a class="button" href="/Tema/show/ <?= $tema->id ?>">Detalles</a>
    				<a class="button" href="/Tema/delete/ <?= $tema->id ?>">Borrado</a>
    			</div>