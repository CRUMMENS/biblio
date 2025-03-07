<!DOCTYPE html>
    <html lang="es">
    	<head>
    		<meta charset="UTF-8">
			<title>Listado de prestamos  - <?= APP_NAME ?></title>
		
    		<!-- META -->
    		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    		<meta name="description" content="Lista de libros en <?= APP_NAME ?>">
    		<meta name="author" content="Robert Sallent">
    		
    		<!-- FAVICON -->
    		<link rel="shortcut icon" href="/favicon.ico" type="image/png">	
    		
    		<!-- CSS -->
    		<?= $template->css()?>
   		</head>
   
   		<body>
   		<?= $template->login()?>
   		<?= $template->header('Lista de prestamos')?>
   		<?= $template->menu()?>
   		<?= $template->breadCrumbs([
   			'Prestamos' => null
   		])?>
   		<?= $template->messages()?>
   		
   		<main>
   			<h1><?= APP_NAME?></h1>
   			<h2>Lista completa de prestamos</h2>

		<?php if ($prestamos){?>
			<table class="table w100">
				<tr>
					<th>ID</th>
					<th>Socio</th>
					<th>Ejemplar</th>
					<th>Título</th>
					<th>Límite</th>
					<th>Devolución</th>
					<th class="centrado">Operaciones</th>
				</tr>
		
	
			
		<?php foreach($prestamos as $prestamo){ ?>
			<tr>
				<td><?= $prestamo->id?></td>
				<td><?= $prestamo->socio?></td>
				<td><a href='/Prestamo/show/<?= $prestamo->id ?>' ><?=$prestamo->idejemplar?></a></td>
				<td><?=$libro->titulo?></td>
				<td><?= $prestamo->limite?></td>
				<td><?= $prestamo->devolucion?></td>
				<td class="centrado">
					<a href='/Prestamo/show/<?= $prestamo->id?>'>Ver</a>
   					<a href='/Prestamo/edit/<?= $prestamo->id?>'>Editar</a>
   					<a href='/Prestamo/delete/<?= $prestamo->id?>'>Borrar</a>
   				</td>
   			</tr>
   		<?php } ?>
   			</table>
   			
   			<?php }else{ ?>
   			<div class="danger p2">
   				<p>No hay libros que mostrar.</p>   			
   			</div>
   			
   			<div class="centered">
   				<a class="button" onclick= "history.back()">Atrás</a>			
   			</div>
   		<?php } ?>	
   			</main>
   			
   			<?= $template->footer()?>
   			
   		</body>	
</html>