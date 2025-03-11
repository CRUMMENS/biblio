<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Borrado de socios <?= APP_NAME ?></title>
		
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
		<?= $template->header('Borrar socios') ?>
		<?= $template->menu() ?>
		<?= $template->breadCrumbs(["socios" => NULL]) ?>
		<?= $template->messages() ?>
		<?= $template->acceptCookies() ?>
		
		<main>
			<h1><?=APP_NAME?></h1>
			<h2>Borrar libro</h2>
			
			<form method="POST" class="p2 m2" action="/Socio/destroy">
				<p>Comfirmar el borrado del socio<b><?=$socio->nombre?> <?=$socio->apellidos?></b>.</p>
				
				<input type="hidden" name="id" value="<?=$socio->id?>">
				<input class="button-danger" type="submit" name="borrar" value="Borrar">
			</form>
			
			<div class="centered">
					<a class="button" onclick="history.back()">Atrás</a>
    				<a class="button" href="/Socio/list">Lista de socios</a>
    				<a class="button" href="/Socio/show/ <?= $socio->id ?>">Detalles</a>
    				<a class="button" href="/Socio/delete/ <?= $socio->id ?>">Borrado</a>
    			</div>