<!DOCTYPE html>
    <html lang="es">
    	<head>
    		<meta charset="UTF-8">
			<title>Listado de socios  - <?= APP_NAME ?></title>
		
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
   		<?= $template->header('Lista de socios')?>
   		<?= $template->menu()?>
   		<?= $template->breadCrumbs([
   			'socios' => null
   		])?>
   		<?= $template->messages()?>
   		
   		<main>
   			<h1><?= APP_NAME?></h1>
   			<h2>Lista completa de libros</h2>

		<?php if ($libros){?>
			<table class="table w100">
				<tr>
					<th>ISBN</th>
					<th>Título</th>
					<th>Autor</th>
					<th class="centrado">Operaciones</th>
				</tr>
		
			
		<?php foreach($socios as $socio){ ?>
			<tr>
				<td><?= $socio->dni?></td>
				<td><?= $socio->nombre?> <?= $socio->apellidos?></td>
				<td><?=$socio->poblacion?></td>
				<td><?=$socio->telefono?></td>
				<td><?=$socio->email?></td>
				
				<td class="centrado">
					<a href='/Socio/show/<?= $socio->id?>'>Ver</a>
   					<a href='/Socio/edit/<?= $socio->id?>'>Editar</a>
   					<a href='/Socio/delete/<?= $socio->id?>'>Borrar</a>
   				</td>
   			</tr>
   		<?php } ?>
   			</table>
   			
   			<?php }else{ ?>
   			<div class="danger p2">
   				<p>No hay socios que mostrar.</p>   			
   			</div>
   			
   			<div class="centered">
   				<a class="button" onclick= "history.back()">Atrás</a>			
   			</div>
   		<?php } ?>	
   			</main>
   			
   			<?= $template->footer()?>
   			
   		</body>	
</html>